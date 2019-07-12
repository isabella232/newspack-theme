<?php
/**
 * Displays the footer widget area
 *
 * @package Newspack
 */

if ( is_active_sidebar( 'footer-1' ) ) : ?>

	<aside class="widget-area <?php echo esc_attr( newspack_widget_column_class( 'footer-1' ) ); ?>" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'newspack' ); ?>">
		<div class="wrapper">
			<?php
			if ( is_active_sidebar( 'footer-1' ) ) {
				dynamic_sidebar( 'footer-1' );
			}
			?>
		</div><!-- .wrapper -->
	</aside><!-- .widget-area -->

<?php endif; ?>
