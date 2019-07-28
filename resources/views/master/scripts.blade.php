
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>

<script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/slick.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>

<script src="{{URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>

<script src="{{URL::asset('assets/js/main.js')}}"></script>

<script>
    // scroll
    var scrollWindow = function() {
        $(window).scroll(function(){
            var $w = $(this),
                    st = $w.scrollTop(),
                    navbar = $('.pb_navbar'),
                    sd = $('.js-scroll-wrap');

            if (st > 150) {
                if ( !navbar.hasClass('scrolled') ) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if ( navbar.hasClass('scrolled') ) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if ( st > 350 ) {
                if ( !navbar.hasClass('awake') ) {
                    navbar.addClass('awake');
                }

                if(sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if ( st < 350 ) {
                if ( navbar.hasClass('awake') ) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if(sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();
</script>