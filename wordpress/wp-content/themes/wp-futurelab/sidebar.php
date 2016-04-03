<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package wp-futurelab
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  <div class="col-md-4">
    <aside id="secondary" class="sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- .sidebar .widget-area -->
  </div>
<?php endif; ?>
