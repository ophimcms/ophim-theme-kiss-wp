<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?> <div id="footer">
                    <footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter"
                    role="contentinfo">
                    <div class="footermenu">
                    <div class="menu-foot-container">
                    <ul id="menu-foot" class="menu">
                    <li id="menu-item-17253"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17253"><a
                    href="/" itemprop="url">DMCA</a></li>
                    <li id="menu-item-17256"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17256"><a
                    href="/" itemprop="url">Contact Us</a></li>
                    </ul>
                    </div>
                    </div>
                    <div class="footercopyright">
                    <div class="footer-az"><span class="ftaz">OPHIMCMS</span><span class="size-s">Xem phim miễn phí</span>
                    <ul class="ulclear az-list">
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    <li><a href="/">Text Link</a></li>
                    </ul>
                    <div class="clear"></div>
                    </div>
                    <div class="copyright">
                    <div class="txt">
                    <p>This site <i>OPHIMCMS</i> does not store any files on its server. All contents
                    are provided by non-affiliated third parties.</p>
                    </div>
                    </div>
                    </div>
                    </footer>
                    </div><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
