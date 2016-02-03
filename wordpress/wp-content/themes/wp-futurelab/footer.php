<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .container -->

		<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
          <div class="row">
            <div class="site-info">
              <?php
                /**
                 * Fires before the wp_futurelab footer text for footer customization.
                 *
                 * @since Twenty Sixteen 1.0
                 */
                do_action( 'wp_futurelab_credits' );
              ?>
              <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
              <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp_futurelab' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wp_futurelab' ), 'WordPress' ); ?></a>
            </div><!-- .site-info -->
        </div>
      </div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
