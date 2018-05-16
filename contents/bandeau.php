<?php 
if( isset($call_to_action) && !empty($call_to_action)){ 
$post = $call_to_action;
setup_postdata( $post ); 
$background_image = get_field('background_image'); ?> 	

<section class="bandeau" <?php if(isset($background_image)){ ?> style="background-image: url(<?php $background_image['url'] ?>);" <?php } ?>>
	<div class="info">
		<div class="container">
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
						if( !empty($lien)){	?>
							<a href="<?php echo $lien; ?>" class="link"> 
								<?php the_field('titre_du_lien'); ?>
							</a>
					<?php } ?> 
				</div>
				<?php if( $ID == 10 ){ ?>
					<div class="col-md-10 offset-md-1">
						<div class="cats">
							<ul>
								<li><a href="#"> Dispositif Marketing </a> </li> 
								<li><a href="#"> Mobile </a> </li> 
								<li><a href="#"> E-CRM </a> </li> 
								<li><a href="#"> Campagne </a> </li> 
								<li><a href="#"> Stratégie de marque </a> </li> 
								<li><a href="#"> Social média </a> </li> 
								<li><a href="#"> Infographie </a> </li> 
								<li><a href="#"> Motion Design </a> </li> 
								<li><a href="#"> Site </a> </li> 
								<li><a href="#"> Événementiel </a> </li> 
							</ul>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>