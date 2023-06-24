<!doctype html>

<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>ZOCK BootStrap HTML5 CSS3 Theme</title>
       <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="apple-touch-icon" href="{{ asset('frontend/assets/apple-touch-icon.png ')}}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/normalize.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/prettyPhoto.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/transitions.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/style.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/color.css ') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css ') }}">
       <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js ')}}"></script>

     
      <!-- Sweetalert css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.css">
      <!-- Toastr css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    </head>
    <body class="tg-home tg-homeone">
       <!--************************************
          Wrapper Start
          *************************************-->
       <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
          <!--************************************
             Header One Start
             *************************************-->
            @include('frontend.body.header')
          <!--************************************
             Header One End
             *************************************-->
           <!-- Start  page wrapper -->
            @yield('content-frontend')
            <!--end page wrapper -->
          <!--************************************
             Footer One Start
             *************************************-->
             @include('frontend.body.footer')
          <!--************************************
             Footer One End
             *************************************-->
       </div>
       <!--************************************
          Wrapper End
          *************************************-->
       <script src="{{ asset('frontend/assets/js/vendor/jquery-library.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js ')}}"></script>
       <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
       <script src="{{ asset('frontend/assets/js/owl.carousel.min.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/isotope.pkgd.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/prettyPhoto.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/parallax.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/countTo.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/gmap3.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/appear.js ')}}"></script>
       <script src="{{ asset('frontend/assets/js/themefunction.js ')}}"></script>

        <!-- Toastr js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <!-- Sweetalert js -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!-- all toastr message show  Update-->
      <script>
         @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;

               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;

               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;

               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
         @endif
      </script>

      <!-- all toastr message show  old-->
      <script type="text/javascript">
         @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}");
         @endif
      </script>
    </body>
</html>