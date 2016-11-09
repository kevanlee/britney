<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package britney
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'britney' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'britney' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'britney' ), 'britney', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="wp-content/themes/britney/granim.js-1.0.6/docs/assets/js/vendor/jquery-3.1.0.min.js"></script>
<script src="wp-content/themes/britney/granim.js-1.0.6/docs/assets/js/vendor/granim.min.js"></script>

<script type="text/javascript">
var granimInstance = new Granim({
		element: '#canvas-basic',
		name: 'basic-gradient',
		direction: 'left-right',
		opacity: [1, 1],
		isPausedWhenNotInView: true,
		states : {
				"default-state": {
						gradients: [
								['#78C0E0', '#449DD1'],
								['#02AAB0', '#00CDAC'],
								['#4CE0D2', '#4ECDC4']
						]
				}
		}
});
</script>

</body>
</html>
