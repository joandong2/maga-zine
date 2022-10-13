<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maga-zine
 */

?>

	
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<div class="row align-items-start">
					<div class="col">
					One of three columns
					</div>
					<div class="col">
					One of three columns
					</div>
					<div class="col">
					One of three columns
					</div>
				</div>
			</div>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'maga-zine' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'maga-zine' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'maga-zine' ), 'maga-zine', '<a href="https://www.joblenda.me/">John Oblenda</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
