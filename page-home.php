<?php
/*
    Template Name: Homepage
*/

?>

<header class="entry-header md:w-full lg:w-full mx-auto">
	<?php get_template_part( 'components/header' ); ?>
</header>

<article class="mx-auto sm:w-full md:w-full lg:w-full" ?>
	
	<?php

	global $post;
	$args = array( 'posts_per_page' => 5, 'offset'=> 1 );

	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<section class="w-1/2 mx-auto py-4	">
			<div class="post-details border-solid border-black">
				<?php if ( has_post_thumbnail() ) {  // Check for Feature Imamge ?>
					<div class="post-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- post-image -->
				<?php } ?>
				<div class="text-2xl text-black mt-3 lg:w-full md:w-5/6 sm:w-5/6 md:mx-auto xs:mx-3">
					<a href="<?php the_permalink(); ?>" class="text-black no-underline">
						<?php the_title(); ?>
					</a>
				</div>
				<div class="flex text-sm text-black xs:mx-3 my-2">
					<p class="bg-grey px-3 rounded-lg">Category: <?php the_category( ', ' ); ?></p>&emsp;
					<i class="fa fa-tags"></i> <?php the_tags(); ?>
				</div>
				<div class="post-excerpt mb-6 lg:w-full md:w-5/6 sm:w-5/6 md:mx-auto xs:mx-3 my-2">
					<?php echo get_excerpt();?>
				</div>
				
			</div>	
		</section>
		
	<?php endforeach; 
		wp_reset_postdata(); 
	?>

	<?php
		get_template_part( 'components/footer' ); ?>

	

</article><!-- #post -->