<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 * 
 */

get_header();
?>

<section class="index_container">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8 ">

				<?php 
					$id = 28; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>

			</div>
		</div>
	</div>
</section>

<?php include 'contents/projets_slider.php'; ?>

<section class="index_container">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8 ">
				<h2>L’essentiel du digital</h2>
				<p>
				Nous assurons une veille digitale quotidienne et nous tenons en alerte sur les sujets chauds du moment pour vous informer des actualités clés et adapter nos solutions aux nouvelles exigences et opportunités du marché. 
				</p>
			</div>
		</div>
	</div>
</section>

<?php include 'contents/slider-actus.php'; ?>
	
<?php $call_to_action = get_field('call_to_action', 28);  ?>
	<?php include 'contents/bandeau.php'; ?>
<?php
get_footer();
