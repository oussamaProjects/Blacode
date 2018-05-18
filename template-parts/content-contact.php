<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="h2">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->

		</div>
		<div class="col-md-12">
			<?php $video = get_field('video'); ?>
			<?php if ($video): ?> 
				<div id="video">
					<video width="100%" autoplay loop muted controls>
						<source src="<?php echo $video['url'] ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div> 
			<?php endif; ?>			
		</div>
	</div>
</div>
<div class="contact-info-container">
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 contact-content">
				<?php the_field('contact__page_content'); ?>
			</div>
		</div>
		<div class="row contact-info-block contact-block-1">
			<div class="col-md-7">
				<?php $img = get_field('contact__image_1_bloc_1');
				if($img): ?>
				<div class="back-img-wrapper">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
				<?php endif; ?>
				<?php $img = get_field('contact__image_2_bloc_1');
				if($img): ?>
				<div class="front-img-wrapper">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
				<?php endif; ?>
			</div>
			<div class="offset-md-1 col-md-4">
				<?php the_field('contact__info_1'); ?>
			</div>
		</div>
		<div class="row contact-info-block contact-block-2">
			<div class="col-md-4">
				<?php the_field('contact__info_2'); ?>
			</div>
			<div class="offset-md-1 col-md-7">
				<?php $img = get_field('contact__image_1_bloc_2'); 
				if($img): ?>
				<div class="back-img-wrapper">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
				<?php endif; ?>
				<?php $img = get_field('contact__image_2_bloc_2'); 
				if($img): ?>
				<div class="front-img-wrapper">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>