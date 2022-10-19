<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package maga-zine
 */

get_header();
?>


	<main id="primary" class="site-main">
		<header class="page-header container">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'maga-zine' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->
		<div class="container _jo-recent-posts">
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content-custom', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-custom', 'none' );

		endif;
		?>
		</div>
		<div class="btn__wrapper">
			<a href="javascript:void(0);" class="btn btn__primary" id="load-more">
				<div class="lds-ellipsis">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
				<span>Load More</span>
			</a>
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
