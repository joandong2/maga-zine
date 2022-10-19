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
			<div class="row">
				<div class="col">
					<?php if ( is_active_sidebar('top-header-left') ) { ?>
						<div class="sidebar">
							<?php dynamic_sidebar('top-header-left'); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col-md-2">
					<p class="text-right"> <?php echo "Today is " . date("F j, Y") . "<br>"; ?></p>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header sticky-top">
		<div class="container">
			<div class="row header-container">
				<div class="site-branding col-md-1">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="fa-solid fa-hands"></i> <?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation col">
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
				<?php get_search_form(); ?> 
			</div>
		</div>
	</header><!-- #masthead -->
<div id="page" class="site">