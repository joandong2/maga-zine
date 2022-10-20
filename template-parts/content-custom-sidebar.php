<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maga-zine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('_jo-recent-post-sidebar'); ?>>

	<div class="entry-left">
	
		<?php
            maga_zine_entry_footer();

            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?> 
        <div class="entry-meta">
            <?php
            maga_zine_posted_on();
            ?>
		</div>

		<?php 

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maga-zine' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<div class="entry-right">
        <?php 
            maga_zine_post_thumbnail(); 
        ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->