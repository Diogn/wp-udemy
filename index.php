<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_udemy
 */

	get_template_part( 'components/header' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>
				
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

			<?php
			endwhile;

			// the_posts_navigation();

			get_template_part( 'components/pagination-home' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
		get_template_part( 'components/footer' ); ?>
