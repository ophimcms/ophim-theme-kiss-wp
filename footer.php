</div>
<?php get_sidebar('ophim'); ?>
<div class="clear"></div>
</div>
</div>
<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</div>
<script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/app_2.js' id='qtip-js'></script>
<?php wp_footer(); ?>
</html>