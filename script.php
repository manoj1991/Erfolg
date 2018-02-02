<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>    
    <script src="https://use.fontawesome.com/30c67a719d.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script>
    var fadeStart=100 // 100px scroll or less will equiv to 1 opacity
    ,fadeUntil=200 // 200px scroll or more will equiv to 0 opacity
    ,fading = $('.header')
;

$(window).bind('scroll', function(){
    var offset = $(document).scrollTop()
        ,opacity=0
    ;
    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=1-offset/fadeUntil;
    }
    fading.css('opacity',opacity).html(opacity);
});
</script>


<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    }); 
    
</script>

<!--Slide-->
<script type="text/javascript">
    jQuery(function ($) {
        $('a.panel').click(function () {
            var $target = $($(this).attr('href')),
            $other = $target.siblings('.active'); 
            if (!$target.hasClass('active')) {
                $other.each(function (index, self) {
                    var $this = $(this);
                    $this.removeClass('active').animate({
                        left: $this.width()
                    }, 500);
                }); 
                $target.addClass('active').show().css({
                    left: -($target.width())
                }).animate({
                    left: 0
                }, 500);
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".services-close").on('click', function(){
            $(".service-side_panel").hide( "slide", { direction: "left"  }, 500);
        })
    })
</script>
<!--/Slide-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script src="js/ripple-config.js"></script>  

<script src="js/classie.js"></script>
<script src="js/anime.js"></script>
<script src="https://cdn.jsdelivr.net/g/jquery@1.11.3,jquery.easing@1.3(jquery.easing.1.3.min.js)"></script>
<script src="https://cdn.jsdelivr.net/jquery.drawsvg/1/jquery.drawsvg.min.js"></script>
<script src="js/custom.js"></script>


<script src="js/velocity.min.js"></script>
<script src="js/velocity.ui.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/toucheffects.js"></script>
<script src="js/smil.js"></script>