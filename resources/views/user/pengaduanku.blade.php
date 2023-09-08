<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APM | Pengaduanku</title>
    @include('user.template.link')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('user.template.nav')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Pengaduanku</h3>
                </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="inner-page">
            <!-- Button trigger modal -->
            <div class="container">
                <p><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Buat Pengaduan</button></p>
                {{-- modal --}}
                @include('user.template.modal')
                {{-- end modal --}}
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">No</th>
                                <th scope="col">Judul Pengaduan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($dataPengaduan) > 0)
                                @foreach ($dataPengaduan as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->kategori->nama_kategori }}</td>
                                        <td>
                                            @if ($data->status == "new")
                                            <p class="badge bg-primary">{{ $data->status }}</p>
                                            @elseif ($data->status == "proses" )
                                            <p class="badge bg-success">{{ $data->status }}</p>
                                            @elseif ($data->status == "selesai" )
                                            <p class="badge bg-info">{{ $data->status }}</p>
                                            @else
                                            <p class="badge bg-danger">{{ $data->status }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/detail/{{ $data->id }}"
                                                class="btn btn-outline-primary">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Pengaduan masih kosong. Silahkan diisi
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{ $dataPengaduan->links() }}
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('tmplate.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('user.template.footer')

    @if (session()->has('berhasil'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('berhasil') }}"
            })
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '',
                text: "{{ session('success') }}",
            })
        </script>
    @endif
</body>

</html>
