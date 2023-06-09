<?php 
get_header();?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
                the_post_thumbnail();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		
	</footer><!-- .entry-footer -->


</article>

<?php get_footer();?>