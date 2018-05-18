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


<section class="projets_container container-fluid">
<div class="row">
	<div class="col-md-6">
		<div class="projets_slider">
			<?php
				$the_query = new WP_Query(array(
					'post_type' => 'projet',
					'posts_per_page' => -1
				));
				if($the_query->have_posts()):
				$realisations = $the_query->get_posts(); ?>
				<div class="owl-carousel owl-theme realisation-slider-1">
				<?php foreach($realisations as $realisation): ?>
					<div class="item">
						<img src="<?php echo get_the_post_thumbnail_url( $realisation->ID ); ?>" alt="<?php echo $realisation->title; ?>" class="img-fluid" />
						<a href="<?php the_permalink( $realisation->ID ); ?>" class="link-view_project"></a>
					</div>
				<?php endforeach; ?>
				</div>
				<div class="owl-carousel owl-theme realisation-slider-2">
				<?php foreach($realisations as $realisation): ?>
					<!-- <div class="item"> -->
						<img src="<?php $img_field = get_field('rea_image_header', $realisation->ID ); echo $img_field['url']; ?>" alt="<?php echo $realisation->title; ?>" class="img-fluid item" />
					<!-- </div> -->
				<?php endforeach; ?>
				</div>
				<div class="slider-controls">
					<a id="slider-nav-prev">
						<img src="<?php echo get_template_directory_uri() . '/img/right-arrow.png'; ?>" alt="Précédent">
					</a>
					<a id="slider-nav-next">
						<img src="<?php echo get_template_directory_uri() . '/img/right-arrow.png'; ?>" alt="Suivant">
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="offset-md-1 col-md-5">
		<h2><?php the_field('rea__block_title'); ?></h2>
		<p><?php the_field('rea__block_text', false, false); ?></p>
		<a href="<?php the_field('rea__url_bouton'); ?>" class="btn-primary"><?php the_field('rea__texte_bouton'); ?></a>
		<a href="<?php the_field('rea__url_en_savoir_plus'); ?>" class="link-en_savoir"><?php _e('En savoir plus', 'blacode'); ?></a>
	</div>
</div>
</section>


<section class="index_container">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8 ">
				<h2>L’essentiel du digital</h2>
				<p>
				Chaque jour, nous veillons sur les tendances et les sujets chauds du moment et les partageons avec vous.
				Chaque jour, nous veillons sur les tendances et les sujets chauds du moment et les partageons avec vous.
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
