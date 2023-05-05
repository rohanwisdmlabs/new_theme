<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'new_theme' ); ?></a>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
		<nav class="navigation_menu">
			<div class='custom_logo'>
			<?php the_custom_logo()?>
            </div>
                    <?php wp_nav_menu([
                        'theme-location' => 'primary'
                    ])?>
					<div class='view_styles'>
						<input id='grid_style' class='submit_btn' type="button" name='Style' value='grid'>
						<input id='list_style' class='submit_btn' type="button" name='Style' value='list'>
						
					</div>                </nav>
			<main id="main" class="site-main">
                
