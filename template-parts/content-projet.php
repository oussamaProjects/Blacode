<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

?>

<div class="projet">
	<?php 
	$rea_image_header = get_field('rea_image_header'); 
	if($rea_image_header){ ?> 
		<div class="page_bandeau" style="background-image: url(<?php echo $rea_image_header['url'] ?>);" ></div>
	<?php } ?>

	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<a href="<?php the_permalink( 10 ) ?>" class="retour"> 
					<img src="<?php bloginfo( 'template_url' ) ?>/img/retour.png" alt="Retour">
				</a>
			</div>
			<div class="col-md-8 offset-md-1">

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

	<?php 
	$image_longueur = get_field('image_longueur'); 
	if($image_longueur){ ?>  
	<div class="image image_longueur">
		<img src="<?php echo $image_longueur['url'];  ?>" alt="<?php echo $image_longueur['alt'];  ?>"> 
	</div>
	<?php } ?>

	<div class="container">
		<div class="row">
			<?php 
			$image_hauteur = get_field('image_hauteur'); 
			if($image_hauteur){ ?> 
				<div class="col-md-12">
					<div class="image image_hauteur">				
						<img src="<?php echo $image_hauteur['url'];  ?>" alt="<?php echo $image_hauteur['alt'];  ?>"> 
					</div>
				</div>
			<?php } ?>
			<div class="col-md-8 offset-md-2">
				<?php echo get_field('second_paragraphe'); ?>
			</div>
		</div>
	</div>

	<?php
	$next_post = get_next_post();
	if (!empty( $next_post )): ?>

	<?php $rea_image_header = get_field('rea_image_header', $next_post->ID); ?>
	<div class="bas_page_bandeau" <?php if($rea_image_header){ ?> style="background-image: url(<?php echo $rea_image_header['url'] ?>);" <?php } ?> >
		<div class="info">
			<div class="titre"><?php echo esc_attr( $next_post->post_title ); ?></div>
			<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php _e('Projet suivant','blacode') ?></a> 
		</div>
	</div>
	<?php endif; ?>
</div>