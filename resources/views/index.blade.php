{{-- header template css --}}
@include('tmplate.head')
  {{-- end header template css --}}

  {{-- loader --}}
  @include('tmplate.load')
  {{-- end loader --}}
    <!-- navbar -->
@include('tmplate.navbar')
    {{-- end navbar --}}
    <!-- ======= Hero Section ======= -->
@include('tmplate.hero')
      <!-- End Featured Services Section -->

      <!-- ======= About Section ======= -->
@include('tmplate.about')
      <!-- End Counts Section -->

      <!-- ======= Masuk Section ======= -->
      <!-- End masuk Section -->

      <!-- ======= Contact Section ======= -->
@include('tmplate.kontak')
      <!-- End Contact Section -->
      
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('tmplate.footer')
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    @include('tmplate.js')
    <script>
      $(document).ready(function() {
        // Menghilangkan pre-loader setelah halaman selesai dimuat
        $('.theme-loader').fadeOut();
      });
    </script>

@if (session()->has('success'))
   <script>
    Swal.fire({
  icon: 'success',
  title: '',
  text: "{{ session('success') }}",
})
   </script>
@endif
@if (session()->has('error'))
<script>
    Swal.fire({
  icon: 'info',
  title: 'Gagal Memuat Halaman',
  text: "{{ session('error') }}",
})
</script>
@endif
  </body>
</html>
