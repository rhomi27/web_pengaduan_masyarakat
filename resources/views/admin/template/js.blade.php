 <!-- Required Jquery -->
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/jquery/jquery.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/jquery-ui/jquery-ui.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/popper.js/popper.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/bootstrap/js/bootstrap.min.js') }}"></script>
 <!-- jquery slimscroll js -->
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
 <!-- modernizr js -->
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/modernizr/modernizr.js') }}"></script>
 <!-- am chart -->
 <script src="{{ asset('assetsAdmin/pages/widget/amchart/amcharts.min.js') }}"></script>
 <script src="{{ asset('assetsAdmin/pages/widget/amchart/serial.min.js') }}"></script>
 <!-- Todo js -->
 <script type="text/javascript " src="{{ asset('assetsAdmin/pages/todo/todo.js') }} "></script>
 <!-- Custom js -->
 <script type="text/javascript" src="{{ asset('assetsAdmin/pages/dashboard/custom-dashboard.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assetsAdmin/js/script.js') }}"></script>
 <script type="text/javascript " src="{{ asset('assetsAdmin/js/SmoothScroll.js') }}"></script>
 <script src="{{ asset('assetsAdmin/js/pcoded.min.js') }}"></script>
 <script src="{{ asset('assetsAdmin/js/demo-12.js') }}"></script>
 <script src="{{ asset('assetsAdmin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
 </script>
 <script>
     var $window = $(window);
     var nav = $(".fixed-button");
     $window.scroll(function() {
         if ($window.scrollTop() >= 200) {
             nav.addClass("active");
         } else {
             nav.removeClass("active");
         }
     });
 </script>
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

 @if (session()->has('success'))
     <script>
         Swal.fire({
             icon: 'success',
             title: 'Okee nicee',
             text: "{{ session('success') }}",
         })
     </script>
 @endif
 @if (session()->has('error'))
     <script>
         Swal.fire({
             icon: 'info',
             title: 'Gagal',
             text: "{{ session('error') }}",
         })
     </script>
 @endif
