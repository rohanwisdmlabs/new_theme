<?php
 get_header();

$args = array(
			'post_type' => 'coursess',
			'posts_per_page' =>9,
			'paged' => $paged,( get_query_var('paged') ) ? get_query_var('paged') : 1,
			'orderby' => 'date',
			'order' => 'ASC',
		);

		$custom_post = new WP_Query($args);

       
		if ($custom_post->have_posts()) {
			echo "<div class='card_container'>";
			while ($custom_post->have_posts()) {
				$custom_post->the_post();
				if (has_post_thumbnail( get_the_id() ))
				{
					$image=wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'custom_img' );

				}
				else{
					$image=wp_get_attachment_image_src( 132, 'custom_img' );
				}
				
				  the_title("<div class='card_view'><div class='thumbnail'><img src='".$image[0]."' alt='post_image'></div><div class='title_tag'>","</div><div class='desc'>".wp_trim_words(get_the_content(), 5)."</div></div>");
				
			}

			echo "</div>";
		
			
			$big=999999999;

			echo "<div class='paginate_links'>";
			

			 echo paginate_links(array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'total' => $custom_post->max_num_pages,
				'current' =>  max( 1, get_query_var('paged') ),
				'format' => '?paged=%#%',
				'prev_next' => true,
				'prev_text' => __('&laquo; Previous'),
				'next_text' => __('Next &raquo;'),
				
			));
			
			echo "</div>";
			
            
        }
		wp_reset_postdata();



 get_footer();?>