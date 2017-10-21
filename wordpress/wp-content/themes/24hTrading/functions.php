<?php

  //Menus navbar
  require_once('wp-bootstrap-navwalker.php');

  //theme support
  function wp_theme_setup(){
    //Image support for the theme
    add_theme_support( 'post-thumbnails' );

    //nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'thename'),
    ));
  }

  add_action('after_setup_theme', 'wp_theme_setup');

//excerpt lenght control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');


//Widgets locations

function wp_init_widget($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="col-md-4">',
    'after_widget' => '</div>'
  ));
}

add_action('widgets_init', 'wp_init_widget');

//functions for trading view widgets_init

function load_tradingview_widget(){
  ob_start();
  ?> <!-- TradingView Widget BEGIN -->
<span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://it.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;">Market mover da <span style="color: #3BB3E4">TradingView</span></a></span>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js">
{
  "exchange": "MIL",
  "showChart": true,
  "locale": "it",
  "width": "400",
  "height": "600",
  "plotLineColorGrowing": "rgba(60, 188, 152, 1)",
  "plotLineColorFalling": "rgba(255, 74, 104, 1)",
  "gridLineColor": "rgba(242, 242, 242, 1)",
  "scaleFontColor": "rgba(218, 221, 224, 1)",
  "belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
  "belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
  "symbolActiveColor": "rgba(242, 250, 254, 1)"
}
</script>
<!-- TradingView Widget END -->
<?php
return ob_get_clean();
}

//shortcode for trading view widget
add_shortcode('tradingviewheatmap', 'load_tradingview_widget');
