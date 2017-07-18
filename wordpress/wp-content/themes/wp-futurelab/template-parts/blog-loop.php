<?php
/**
 * The template part for displaying single posts
 *
 * @package wp-futurelab
 */
?>
<div class="col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header><!-- .entry-header -->

    <?php wp_futurelab_post_thumbnail(); ?>

    <div class="entry-content">
      <?php
        $content_length = 150;
        $shortDescription = get_the_excerpt();
        if(strlen($shortDescription)>$content_length){
          $shortDescription = substr($shortDescription,0,$content_length) . '...';
        }
        echo $shortDescription;
      ?>
      <div class="read-more-button">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more">Read More</a>
      </div>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>
