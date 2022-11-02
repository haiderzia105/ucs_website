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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

{{-- <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
            1300: {
                items: 1
            },
        }
    })
</script> --}}
@stack('js')
</body>
</html>