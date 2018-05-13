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
		<div class="offset-md-2 col-md-8">

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