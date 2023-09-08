 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 {{-- cdn --}}
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js
"></script>

<script>
$('.logout').click(function(){
  
  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-primary m-3',
    cancelButton: 'btn btn-danger m-3'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Mau pergi kemana?',
  text: "Anda mau ninggalin akun ini?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Logout!',
  cancelButtonText: 'No, Batal!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "/logout"
    swalWithBootstrapButtons.fire(
      'Logout',
      'Anda berhasil logout',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Ehh, gagal',
      'Hehee kamu tidaa jdi pergii :)',
      'error'
    )
  }
})
  
});

</script>

@if (session()->has('error'))
<script>
    Swal.fire({
  icon: 'info',
  title: 'Gagal Memuat Halaman',
  text: "{{ session('error') }}",
})
</script>
@endif