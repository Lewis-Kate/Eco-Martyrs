<?php
/**
 * Africa taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div class="wrapper">
  <div class="primary-content">
    <h1 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?> Africa</h1>

    <?php if ( !empty( $term->description ) ): ?>
    <div class="archive-description">
      <?php echo esc_html($term->description); ?>
    </div>
    <?php endif; ?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
  <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <div class="content clearfix">
    <div class="entry" id="taxonomy_image">
    <img src ="<?php echo get_the_post_thumbnail_url( );?>">
    </div>
  </div>
</div><!--// end #post-XX -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>