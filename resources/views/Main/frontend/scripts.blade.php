<!--Bootstrap Js-->
<script src="{{asset('/Main/frontend/js/bootstrap.js')}}"></script>
<!--Counte down Js-->
<script src="{{asset('/Main/frontend/js/jquery.js')}}"></script>
<script src="{{asset('/Main/frontend/js/jquery.countTo.js')}}"></script>
<script src="{{asset('/Main/frontend/js/jquery.plugin.js')}}"></script>
<script src="{{asset('/Main/frontend/js/jquery.countdown.js')}}"></script>
<script src="{{asset('/Main/frontend/js/jquery.jCounter.js')}}"></script>

{{-- counter Time  --}}
<script src="{{asset('/Main/frontend/js/flipclock.js')}}"></script>

<!--Carousel Js-->
<script src="{{asset('/Main/frontend/js/owl.carousel.min.js')}}"></script>
<!--Video Slider Js-->
<script src="{{asset('/Main/frontend/js/vide-slider.js')}}"></script>
    <!--fancybox-->
  <script src="{{asset('/Main/frontend/js/fancybox.min.js')}}"></script>
<!-- data table script   -->
<script src="{{asset('/Main/frontend/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<!-- Counts JS -->
<script src="{{asset('/Main/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/Main/frontend/js/jquery.waypoints.js')}}"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    $('#owl-first-home').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay:false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            },
            1300: {
                items: 4
            },
        }
    })
</script> 
<script>
    $('#owl-second-home').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay:false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1300: {
                items: 3
            },
        }
    })
</script>
<script type="text/javascript">
    // jQuery counterUp
    $('[data-toggle="counterUp"]').counterUp({
        delay: 10,
        time: 1500
    });
</script>
@stack('js')
</body>
</html>