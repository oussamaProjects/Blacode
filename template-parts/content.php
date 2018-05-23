<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

?>

<?php 
$header_image = get_field('header_image'); 
if($header_image){ ?> 
	<div class="page_bandeau" style="background-image: url(<?php echo $header_image['url'] ?>);" ></div>
<?php } ?>

<div class="container">
	<div class="row">
		<div class="col-md-1">
			<a href="<?php the_permalink( 53 ) ?>" class="retour"> 
				<img src="<?php bloginfo( 'template_url' ) ?>/img/retour.png" alt="Retour">
			</a>
		</div>
		<div class="col-md-8 offset-md-1">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="h1">', '</h1>' ); ?>
				</header><!-- .entry-header -->
 

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

<?php
$next_post = get_next_post();
if (!empty( $next_post )): ?>

<?php $header_image = get_field('header_image', $next_post->ID); ?>
<div class="bas_page_bandeau" <?php if($header_image){ ?> style="background-image: url(<?php echo $header_image['url'] ?>);" <?php } ?> >
	<div class="info">
		<div class="titre"><?php echo esc_attr( $next_post->post_title ); ?></div>
		<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php _e('Actualité suivante','blacode') ?></a> 
	</div>
</div>
<?php endif; ?>