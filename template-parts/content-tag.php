<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_udemy
 */
  if (have_rows( 'editor' ) ) :
    while ( have_rows('editor') ) : the_row();
      $editor_name			= get_sub_field('editor_name');
      $editor_initial		= get_sub_field('initial_name');
      $user_desk		    = get_sub_field('user_desk');      
    endwhile;
  endif;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php the_title(); ?></h1>

        <?php if ('post' == get_post_type()) : ?>

        <div class="post-details">
            <i class="fa fa-user"></i> <?php the_author(); ?>
            <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
            <i class="fa fa-folder"></i> <?php the_category(', ') ?>
            <i class="fa fa-tags"></i> <?php the_tags(); ?>

            <div class="post-comments-badge">
                <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
            </div><!-- post-comments-badge -->

            <div><?php edit_post_link('Edit', '<i class="fa fa-pencil"></i>', ''); ?>
            </div> <!-- Able to Edit Link -->
        </div><!-- post-details -->

        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail()) {  ?>
    <div class="post-image w-full">
        <?php the_post_thumbnail(); ?>
    </div><!-- post-image -->
    <?php 
  } ?>

    <div class="post-body">
      <?php echo get_excerpt();?>
    </div><!-- post-excerpt -->
    <div class="w-full bg-grey-light flex justify-end py-2 pr-4">
      Editor: <?php echo $editor_name; ?> - <?php echo $editor_initial; ?>
    </div>

</article><!-- #post --> 