<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maga-zine
 */

get_header();
?>
    <?php 
        $current_category_id = get_query_var('cat');
        $current_category_obj = get_category($current_category_id);
        $image = get_field('featured_image', $current_category_obj->taxonomy.'_'.$current_category_obj->term_id);
    ?>
    <div class="category-banner" style="background-image: url('<?php echo $image['url']; ?>')">
        <div class="overlay"></div>
        <div class="content">
            <h2><?php echo $current_category_obj->name; ?></h2>
            <p><?php echo $current_category_obj->description; ?></p>
        </div>
    </div>
	<main id="primary" class="site-main">
		<div class="container _jo-recent-posts">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-category', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
        <div class="btn__wrapper">
			<?php 
			if($current_category_obj->count > get_option('posts_per_page')) { 
				$max_page = ceil($current_category_obj->count / get_option('posts_per_page')); ?>
					<a href="javascript:void(0);" data-max="<?php echo $max_page ?>"class="btn btn__primary load-more-button" data-id="<?php echo $current_category_obj->term_id ?>" id="load-more">
					<div class="lds-ellipsis">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<span>Load More</span>
				</a>
			<?php } else { ?>
				<a href="javascript:void(0);" class="load-more-button">No more posts...</a>
			<?php } ?>
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
