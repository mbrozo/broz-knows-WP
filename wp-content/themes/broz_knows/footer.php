<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package broz-knows
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>

			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'broz_knows' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'broz_knows' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'broz_knows' ), 'broz-knows', '<a href="http://broz@brozknows.com" rel="designer">Broz</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
