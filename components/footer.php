<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_udemy
 */
?>

<?php wp_footer(); ?>

<!-- FOOTER SECTION -->
	<footer class="container-fluid bg-grey-dark">
		<div class="sm:w-1/2 flex mx-auto xs:flex-wrap sm:flex-no-wrap">
			<div class="flex justify-center xs:mx-auto xs:justify-center xs:mt-3">
				<p class="mb-1"><a href="/"><img class="logo-footer"
						src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kg-footer-logo.png" alt="Kompas">
					</a>
				</p>
			</div>
			<div class="w-full flex justify-end mr-5 mt-5 xs:mt-0 xs:mr-0 xs:mt-0 sm:mt-3	">
				<?php 
					wp_nav_menu( array(
							'theme_location' => 'footer',
							'container'			 => 'footer-container',
							'menu_class'		 => 'flex mx-0 px-0 text-sm'
						)
					)
				?>
			</div>
		</div>
	</footer>
