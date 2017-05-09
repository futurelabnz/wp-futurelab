<?php
/**
 * The template for displaying the footer
 * footer 3 columns
 * footer bottom 2 columns
 *
 * @package wp-futurelab
 */
?>

			  </div><!-- .row -->
		</div><!-- .container -->

		<footer id="colophon" class="site-footer" role="contentinfo">
	  <div class="footer_top">
		<div class="container">
		  <div class="row">
			<?php
			  // count for active sidebar
			  $footerColArray = array( is_active_sidebar( 'footer_column_1' ), is_active_sidebar( 'footer_column_2' ), is_active_sidebar( 'footer_column_3' ), is_active_sidebar( 'footer_column_4' ), is_active_sidebar( 'footer_column_5' ) );
			if ( count( array_filter( $footerColArray ) ) > 0 ) {
				if ( count( array_filter( $footerColArray ) ) == 1 ) {
					$footerColumn = 12;
				} elseif ( count( array_filter( $footerColArray ) ) == 5 ) {
					$footerColumn = '5ths col-xs-6';
				} else {
					$footerColumn = 12 / count( array_filter( $footerColArray ) );
				}
			}
			?>

			<?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
			  <div class="col-md-<?php echo $footerColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_column_1' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
			  <div class="col-md-<?php echo $footerColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_column_2' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

							<?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
			  <div class="col-md-<?php echo $footerColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_column_3' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

							<?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
			  <div class="col-md-<?php echo $footerColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_column_4' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

								<?php if ( is_active_sidebar( 'footer_column_5' ) ) : ?>
			  <div class="col-md-<?php echo $footerColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_column_5' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>
		  </div>
		</div>
	  </div>
	  <div class="footer_bottom">
		<div class="container">
		  <div class="row">
			<?php
			  // both sidebar active 2 columns, otherwise single column
			if ( is_active_sidebar( 'footer_bottom_1' ) && is_active_sidebar( 'footer_bottom_2' ) ) {
				$contentBottomColumn = 6;
			} else {
				$contentBottomColumn = 12;
			}
			?>

			<?php if ( is_active_sidebar( 'footer_bottom_1' ) ) : ?>
			  <div class="col-md-<?php echo $contentBottomColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_bottom_1' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_bottom_2' ) ) : ?>
			  <div class="col-md-<?php echo $contentBottomColumn; ?>">
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer_bottom_2' ); ?>
				</div><!-- .widget-area -->
			  </div>
			<?php endif; ?>
		  </div>
		</div>
	  </div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
