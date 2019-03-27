<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_udemy
 */

get_template_part( 'components/header' );

?>

	<div class="container-fluid">
		<div id="primary" class="flex row">
			<main class="w-2/3 mx-2">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part('template-parts/content-limit');
						
						get_template_part( 'template-parts/content', get_post_type() );

						get_template_part( 'components/pagination-single' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

				endwhile; // End of the loop.

				
				?>

			</main>
				
			<aside class="w-1/4">
				<?php get_sidebar() ?>
			</aside>
		</div>

		<div class="w-2/3 ml-2 mt-0 pt-0">
			<?php dynamic_sidebar( 'Bottom-Sidebar' ); ?>
		</div>
		
	</div><!-- #primary -->

<?php

get_template_part( 'components/footer' );
