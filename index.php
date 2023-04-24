<?php
get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
        echo "<div class='title'>";
        echo "<a href='".get_permalink(get_the_ID())."'>";
        the_title('<h1>','</h1>');
        echo "</a></div>";
        ?>
        <article id="post-<?php the_ID()?>"<?php post_class()?>>
        <?php
        the_content();
        ?>
        </article>
        <?php
		
	}

	// Previous/next page navigation.


} else {

	// If no content, include the "No posts found" template.
    echo "404 error";
	

}

get_footer();
