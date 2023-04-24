<?php
if(! function_exists( 'myfirsttheme_setup' )){

function myfirsttheme_setup(){
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array( 'style','script' ) );
add_theme_support( 'automatic-feed-links' ); 

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'new_theme' ),
    'secondary' => __( 'Secondary Menu', 'new_theme' ),
) );
}

add_action('after_setup_theme','myfirsttheme_setup');

}

if(! function_exists( 'register_scripts_styles' )){

    function register_scripts_styles(){

        wp_enqueue_style('style', get_stylesheet_uri());
        
        //for full_width
        if(is_page_template('full_width.php'))
        {
            wp_enqueue_style('full_width_styles',get_template_directory_uri().'/fullwidthstyle.css',false,1.0,'all');
        }
    
   
    
    }
    add_action('wp_enqueue_scripts','register_scripts_styles');

}




