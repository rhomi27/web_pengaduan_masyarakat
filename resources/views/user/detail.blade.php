<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APM | Detail Pengaduanku</title>
    @include('user.template.link')
    <style>
        .foto {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border: 5px solid #0909af;
        }
    </style>
</head>
{{-- head --}}

{{-- end head --}}

<body>
    {{-- nav --}}
    @include('user.template.nav')
    {{-- end nav --}}
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Detail</h3>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        @include('user.template.det')
        <!-- End Portfolio Details Section -->
        <hr>
        <!-- Tanggapan -->
        @include('user.template.tnggpn')
        <!-- end tanggapan -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('user.template.footer')
    @if (session()->has('success'))
        <script>
            Swal.fire(
                "",
                "{{ Session::get('success') }}",
                "success"
            )
        </script>
    @endif
</body>

</html>
