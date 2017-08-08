<?php
/**
 * The template for displaying accordion
 *
 * This template can be overridden by copying it to yourtheme/futurelab/accordion.php.
 *
 * @package FutureLab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if( '2' === $columns ) : ?>
	<div class="row">
		<div class="col-md-6">
<?php endif; ?>
			<ul class="fl-accordion">
				<?php
				$i = 0;
				foreach ( $accordions as $accordion ) :

					$title = '';
					$desc = '';
					$i++;
					if ( isset( $accordion['title'] ) ) {
						$title = $accordion['title'];
					}

					if ( isset( $accordion['description'] ) ) {
						$desc = $accordion['description'];
					}

					if ( ! empty( $title ) ) :
				?>
					<li>
						<div class="toggle"><?php echo esc_html( $title ); ?></div>
						<div class="inner">
							<?php echo wpautop( $desc ); ?>
						</div>
					</li>
				<?php
					endif;
					if( '2' === $columns ) :
						if ($i == floor(count($accordions) / 2)) : ?>
						    </div>
							<div class="col-md-6">
								<ul class="fl-accordion">
							<?php
					    endif;
				    endif;
				endforeach; ?>
			</ul>
<?php if( '2' === $columns ) : ?>
		</div>
	</div>
<?php endif; ?>