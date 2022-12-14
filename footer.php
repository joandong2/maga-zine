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
			<div class="footer-widgets">
				<div class="container">
					<div class="row row-cols-3">
						<div class="col">
							<?php if ( is_active_sidebar('footer-widgets-1') ) { ?>
								<div class="sidebar">
									<?php dynamic_sidebar('footer-widgets-1'); ?>
								</div>
							<?php } ?>
						</div>
						<div class="col">
							<?php if ( is_active_sidebar('footer-widgets-2') ) { ?>
								<div class="sidebar">
									<?php dynamic_sidebar('footer-widgets-2'); ?>
								</div>
							<?php } ?>
						</div>
						<div class="col">
							<?php if ( is_active_sidebar('footer-widgets-3') ) { ?>
								<div class="sidebar">
									<?php dynamic_sidebar('footer-widgets-3'); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="site-info">
				<div class="container">
					<!-- <a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'maga-zine' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						//printf( esc_html__( 'Proudly powered by %s', 'maga-zine' ), 'WordPress' );
						?>
					</a> -->
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( '%1$s', 'maga-zine' ), '&copy; All Rights Rserverd. Noypi 2022');
					?>
				</div>
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
