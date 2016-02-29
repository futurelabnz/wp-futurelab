<?php
/**
 * The template for displaying image attachments
 *
 * @package wp-futurelab
 */

get_header(); ?>
  <?php if ( is_active_sidebar( 'sidebar-1' )  ) { ?>
    <div class="col-md-9">
  <?php }else{ ?>
    <div class="col-md-12">
  <?php } ?>
        
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php
          // Start the loop.
          while ( have_posts() ) : the_post();
        ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <nav id="image-navigation" class="navigation image-navigation">
              <div class="nav-links">
                <div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'wp_futurelab' ) ); ?></div>
                <div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'wp_futurelab' ) ); ?></div>
              </div><!-- .nav-links -->
            </nav><!-- .image-navigation -->

            <header class="entry-header">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">

              <div class="entry-attachment">
                <?php
                  /**
                   * Filter the default wp_futurelab image attachment size.
                   *
                   * @param string $image_size Image size. Default 'large'.
                   */
                  $image_size = apply_filters( 'wp_futurelab_attachment_size', 'large' );

                  echo wp_get_attachment_image( get_the_ID(), $image_size );
                ?>

                <?php wp_futurelab_excerpt( 'entry-caption' ); ?>

              </div><!-- .entry-attachment -->

              <?php
                the_content();
                wp_link_pages( array(
                  'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wp_futurelab' ) . '</span>',
                  'after'       => '</div>',
                  'link_before' => '<span>',
                  'link_after'  => '</span>',
                  'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'wp_futurelab' ) . ' </span>%',
                  'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
              ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
              <?php wp_futurelab_entry_meta(); ?>
              <?php
                // Retrieve attachment metadata.
                $metadata = wp_get_attachment_metadata();
                if ( $metadata ) {
                  printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
                    esc_html_x( 'Full size', 'Used before full size attachment link.', 'wp_futurelab' ),
                    esc_url( wp_get_attachment_url() ),
                    absint( $metadata['width'] ),
                    absint( $metadata['height'] )
                  );
                }
              ?>
              <?php
                edit_post_link(
                  sprintf(
                    /* translators: %s: Name of current post */
                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'wp_futurelab' ),
                    get_the_title()
                  ),
                  '<span class="edit-link">',
                  '</span>'
                );
              ?>
            </footer><!-- .entry-footer -->
          </article><!-- #post-## -->

          <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
              comments_template();
            }

            // Parent post navigation.
            the_post_navigation( array(
              'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'wp_futurelab' ),
            ) );
          // End the loop.
          endwhile;
        ?>

      </main><!-- .site-main -->
    </div><!-- .content-area -->
  </div><!-- .col-md-12 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
