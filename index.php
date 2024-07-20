<?php
get_header();
?>
<?php if ( is_active_sidebar('widget-slider-poster') ) {
    dynamic_sidebar( 'widget-slider-poster' );
} else {
    _e('This is widget slide. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<?php if ( is_active_sidebar('widget-area') ) {
    dynamic_sidebar( 'widget-area' );
} else {
    _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<?php
add_action('wp_footer', function (){?>
    <script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/owl.carousel.min.js' id='owl-carousel-js'></script>
    <script>
        $(document).ready(function() {
            $('.loop').owlCarousel({
                center: true,
                loop: true,
                nav: true,
                //animateOut: 'fadeOut',
                navText: ["<span class='prev icon-angle-left'></span>",
                    "<span class='next icon-angle-right'></span>"
                ],
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 0,
                    }
                }
            });
        });
    </script>
<?php }) ?>


<?php
get_footer();
?>
