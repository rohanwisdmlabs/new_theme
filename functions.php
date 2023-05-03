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
      
            wp_enqueue_style('full_width_styles',get_template_directory_uri().'/fullwidthstyle.css',false,1.0,'all');
        
    
   
    
    }
    add_action('wp_enqueue_scripts','register_scripts_styles');

}


//custom image size
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size( 'custom_img', 300,250,true);
     // 300 pixels wide (and unlimited height)
     $defaults = array(
		'height'               => 50,
		'width'                => 200,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);


    add_theme_support( 'custom-logo',$defaults );
	
}




