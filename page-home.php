<?php
/*
    Template Name: Home Page
*/

?>

<head>
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/main.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/custom.css" rel="stylesheet">
</head>

<header class="md:w-full lg:w-1/2 mx-auto">
	<?php get_template_part( 'components/header' ); ?>
</header>

<article class="mx-auto sm:w-full md:w-full lg:w-1/2" ?>
	
	<?php

	global $post;
	$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<li>
			<?php if ( has_post_thumbnail() ) {  // Check for Feature Imamge ?>
				<div class="post-image w-full list-reset ">
					<?php the_post_thumbnail(); ?>
				</div><!-- post-image -->
			<?php } ?>
			<div class="text-2xl text-black mt-3 lg:w-full md:w-5/6 sm:w-5/6 md:mx-auto xs:mx-3">
				<a href="<?php the_permalink(); ?>" class="text-black no-underline">
					<?php the_title(); ?>
				</a>
			</div>
			<div class="flex text-sm text-black xs:mx-3">
				<p><?php the_category(); ?></p>&nbsp;
				<p><?php the_tags(); ?></p>
			</div>
			<div class="mb-6 lg:w-full md:w-5/6 sm:w-5/6 md:mx-auto xs:mx-3">
				<?php echo get_excerpt();?>
			</div>
			
		</li>
	<?php endforeach; 
	wp_reset_postdata();?>



</article><!-- #post -->

<?php get_template_part( 'components/footer' ); ?>