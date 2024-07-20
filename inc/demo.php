<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div id="footer">
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
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);