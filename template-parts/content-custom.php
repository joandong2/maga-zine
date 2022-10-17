<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maga-zine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('_jo-recent-post'); ?>>

    <div class="entry-header">
        <?php 
            maga_zine_post_thumbnail(); 
            maga_zine_entry_footer();
        ?>
    </div>

	<div class="entry-content">

		<?php
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?> 
        <div class="entry-meta">
            <?php
            maga_zine_posted_by();
            maga_zine_posted_on();
            ?>
		</div>

		<?php the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'maga-zine' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maga-zine' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->