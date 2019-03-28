<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_udemy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- Custom css -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/main.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/custom.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
	<!-- <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Font Awesome Icons -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/single/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
	<?php wp_head(); ?>
</head>
<!-- ======================
			HEADER SECTION
			======================= -->
<body <?php body_class(); ?>>

  <!-- NAVBAR  -->
  <div class="flex justify-center bg-grey-lighter py-3">
    <div class="text-center flex items-center flex-no-shrink mr-2">
      <a href="<?php echo home_url(); ?>"><svg class="w-8 mx-3" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 536.1 536.1" enable-background="new 0 0 536.1 536.1" xml:space="preserve">
        <g>
          <path fill="#00599A" d="M508.7,479.7c-5.1,18.4-24.3,37.6-42.8,42.6c0,0-51.2,13.8-197.9,13.8S70.2,522.3,70.2,522.3
            c-18.5-5-38-24.1-43.4-42.4c0,0-26.7-90.8-26.7-211.9S26.7,56.2,26.7,56.2c5.4-18.3,25.1-36.9,43.7-41.3C70.4,14.9,134.5,0,268,0
            s197.6,14.9,197.6,14.9c18.6,4.3,38,23,43.1,41.4c0,0,27.4,99.6,27.4,211.7S508.7,479.7,508.7,479.7z"/>
          <g>
            <polygon fill="#F6F5F5" points="237.1,433.5 237.1,420.7 194.4,420.7 252,115.4 299,115.4 299,102.6 149.6,102.6 149.6,115.4 
              192.3,115.4 132.5,420.7 85.5,420.7 85.5,433.5 235,433.5 		"/>
            <polygon fill="#F6F5F5" points="279.8,234.9 410,115.4 450.5,115.4 450.5,102.6 337.4,102.6 337.4,115.4 386.5,115.4 230.7,260.6 
              326.7,420.7 279.8,420.7 279.8,433.5 439.9,433.5 439.9,420.7 395,420.7 		"/>
          </g>
        </g>
        </svg>
      </a>
    </div>
    <div class="text-center flex items-center flex-no-shrink mr-3 mb-1">
      |
    </div>

    <div class="w-full flex items-center sm:w-auto relative">
      <div class="text-base lg:flex-grow">
        
        <?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'header',
              'container'			=> 'nav'
							)	);
					?>
        
      </div>
    </div>
  </div>

</body>
