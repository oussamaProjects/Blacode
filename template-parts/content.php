<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

?>

<div class="page_bandeau" style="background-image: url(<?php bloginfo( 'template_url' ) ?>/img/page_bandeau.jpg);">

</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php blacode_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blacode' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blacode' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<!-- <footer class="entry-footer"> -->
					<?php // blacode_entry_footer(); ?>
				<!-- </footer> -->
			</article><!-- #post-<?php the_ID(); ?> -->

		</div>
	</div>
</div>

<div class="bas_page_bandeau" style="background-image: url(<?php bloginfo( 'template_url' ) ?>/img/bas_page_bandeau.jpg);">
	<div class="info">
		<div class="titre">lorem ipsum</div>
		<a href=""><?php _e('Actualité suivant','blacode') ?></a>
	</div>
</div>