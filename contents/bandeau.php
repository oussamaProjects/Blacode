<?php 
if( isset($call_to_action) && !empty($call_to_action)){ 
$post = $call_to_action;
setup_postdata( $post ); 
$background_image = get_field('background_image'); ?> 	

<section class="bandeau" <?php if(isset($background_image)){ ?> style="background-image: url(<?php $background_image['url'] ?>);" <?php } ?>>
	<div class="info">
		<div class="conatiner">
			<div class="row">
				<div class="col-md-12">
					<div class="titre">
						<?php the_title( ) ?> 
					</div>
					<div class="description">
						<?php the_field('description'); ?> 		
					</div>
					<?php
						$lien = '';
						$lien_interne = get_field('lien_interne');
						$lien_externe = get_field('lien_externe');
						if (isset($lien_interne)) {
							$lien = $lien_interne;
						} else {
							$lien = $lien_externe;							
						}
						
					 ?>
					
					<a href="<?php echo $lien; ?>"> 
					<?php the_field('titre_du_lien'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>