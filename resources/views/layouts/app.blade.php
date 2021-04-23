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
    @stack('styles')
    <script type="text/javascript" src="{{asset('assets/gsap/gsap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/ScrollTrigger.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/ScrollToPlugin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/MotionPathPlugin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/CustomEase.min.js')}}"></script>
  </head>
  <body>
    @yield('content')
    @include('layouts.__footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/carousel/js/owl.carousel.min.js') }}"></script>
    @stack('scripts')
    <script>
      let menuActive = false;
      $(".menu-btn").click(function() {
        if (!menuActive) {
            menuActive = true
            // $('.header').hide("slow")
            gsap.to('.menu',{
              y:0
            })
            console.log($('.wave-wrapper').hasClass('fixed'));
            if(!$('.wave-wrapper').hasClass('fixed')){
              gsap.to('.wave-wrapper',{
                top:$(document).scrollTop()
              })
            }
            $('body').css('height','100vh');
            $('body').css('overflow','hidden');
            $('.menu-btn').addClass('open')
            $('.wave').addClass('big')
        }else{
            menuActive = false
            // $('.header').show("slow")
            gsap.to('.menu',{
              display:'block',
              y:-900
            })
            gsap.to('.wave-wrapper',{
              top:0
            })
            $('body').css('height','unset');
            $('body').css('overflow','unset');
            $('.menu-btn').removeClass('open')
            $('.wave').removeClass('big')
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
          autoplayTimeout:8000,
          autoplayHoverPause:true
        });
      });
     

    gsap.to('.g-cursor__circle',1,{
      scale:1.5,
      repeat:-1,
      ease:'bouce',
      opacity:0,
      yoyo:true,
    });
    // document.addEventListener('mouseenter', () => {
    //   this.hideCursor = false;
    // });

    </script>
  </body>
</html>
