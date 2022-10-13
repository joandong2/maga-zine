<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maga-zine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maga-zine' ); ?></a>
	<div class="top-header">
		<div class="container">
			<div class="">
				<?php if ( is_active_sidebar('top-header-left') ) { ?>
					<div class="sidebar">
						<?php dynamic_sidebar('top-header-left'); ?>
					</div>
				<?php } ?>
			</div>
			<div class="">
				<?php if ( is_active_sidebar('top-header-right') ) { ?>
					<div class="sidebar">
						<?php dynamic_sidebar('top-header-right'); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header sticky-top">
			<div class="site-branding">
				<div class="container">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="fa-solid fa-hands"></i> <?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$maga_zine_description = get_bloginfo( 'description', 'display' );
					if ( $maga_zine_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $maga_zine_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>
			</div><!-- .site-branding -->
			
			<div class="container">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'maga-zine' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
<div id="page" class="site">