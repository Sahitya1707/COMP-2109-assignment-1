<?php
// our navigation

function mytheme_theme_setup(){
    register_nav_menus(array(
        'header'=>'header menu',
        'footer'=>'Footer menu'
    ));
   
}

add_action('after_setup_theme', 'mytheme_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function cg_your_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'cg_your_theme_scripts' );
// add our featured image support through our posts
add_theme_support('post-thumbnails');


function theme_register_sidebars() {
    register_sidebar(array(
        'name' => __('Footer Widget Area First', 'your-theme-textdomain'),
        'id' => 'footer-widget-area-first',
        'description' => __('Widgets in this area will be shown in the first section of the footer.', 'your-theme-textdomain'),
      
        // 'before_title' => '<h2 class="widget-title">',
        // 'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Widget Area Second', 'your-theme-textdomain'),
        'id' => 'footer-widget-area-second',
        'description' => __('Widgets in this area will be shown in the second section of the footer.', 'your-theme-textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
  
}
add_action('widgets_init', 'theme_register_sidebars');



?>