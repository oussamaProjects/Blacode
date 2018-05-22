
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
		<div class="col-md-5">
			<h2 class="h2"><?php the_field('rea__block_title'); ?></h2>
			<p><?php the_field('rea__block_text', false, false); ?></p>
			<a href="<?php the_field('rea__url_bouton'); ?>" class="btn-custom"><?php the_field('rea__texte_bouton'); ?></a>
			<a href="<?php the_field('rea__url_en_savoir_plus'); ?>" class="link-en_savoir"><?php _e('En savoir plus', 'blacode'); ?></a>
		</div>
	</div>
</section>