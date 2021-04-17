<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicity</title>
  </head>
  <body>
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/carousel/js/owl.carousel.min.js') }}"></script>
    @stack('scripts')
    <script>
      let menuActive = false;
      $(".toogle-menu").click(function() {
        if (!menuActive) {
            menuActive = true
            $('.header').hide("slow")
            $('#menu').show("slow")
            $('.toogle-menu.open').addClass('d-none')
            $('.toogle-menu.close').removeClass('d-none')
        }else{
            menuActive = false
            $('.header').show("slow")
            $('#menu').hide("slow");
            $('.toogle-menu.open').removeClass('d-none')
            $('.toogle-menu.close').addClass('d-none')
        }
      });
    </script>
    <script>
      // $('#video').show()
      $('.video').on('ended',function(){ 
        window.location.href = "{{ url('/home') }}"
        // $(this).hide();
      });
    </script>
    <script>
      $(document).ready(function(){
        // $(".owl-carousel").owlCarousel()
        $(".owl-carousel").owlCarousel({
          items:4,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true
        });
      });
    </script>
  </body>
</html>
