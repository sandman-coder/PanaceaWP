<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PanaceaWP
 */

?>

	</div><!-- #content -->

	<div id="copyright" class="fl_left">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'panacea' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'panacea' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'panacea' ), 'panacea', '<a href="http://www.goblinthemes.com">GoblinThemes</a>' );
				?>
		</div><!-- .site-info -->
</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
