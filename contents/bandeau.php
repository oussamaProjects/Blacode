<?php 
if( isset($call_to_action) && !empty($call_to_action)){ 
$post = $call_to_action;
setup_postdata( $post ); 

$background_image = get_field('background_image');  ?> 	

<section class="bandeau" <?php if(isset($background_image)){ ?> style="background-image: url(<?php echo $background_image['url']; ?>);" <?php } ?>>
	<div class="info">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titre">
						<?php the_title( ); ?> 
					</div>
					<?php if(  get_field('description') != null ){ ?>
						<div class="description">
						<?php the_field('description'); ?> 		
					</div>
					<?php } ?>
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


				<?php if( $ID == 6 ){ ?>
					<div class="col-md-12">
						<div class="rencontrons-nous">
							<div class="bloc">
								<div class="titre"><?php _e('France','blacode'); ?></div>
								<div class="pictos">
									<div class="pictos_tab">
										<div class="tab">
											<button class="tablinks" onclick="openCity(event, 'smartphone')" id="defaultOpen">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/smartphone.png" alt="">
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
											<button class="tablinks" onclick="openCity(event, 'placeholder-outline')">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/placeholder-outline.png" alt="">												
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
											<button class="tablinks" onclick="openCity(event, 'flying-paper-plane')">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/flying-paper-plane.png" alt="">												
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
										</div>

										<!-- Tab content -->
										<div id="smartphone" class="tabcontainer tabcontent">
											<span><a href="tel:+33176410426">+33 1 76 41 04 26</a></span>
										</div>

										<div id="placeholder-outline" class="tabcontainer tabcontent">
											<span>6 rue du Bois Sauvage - Évry</span> 
										</div>

										<div id="flying-paper-plane" class="tabcontainer tabcontent">
											<span><a href="mailto:hello@blacode.fr">hello@blacode.fr</a></span>
										</div>
									</div>
								</div>
							</div> 

							<div class="bloc">
								<div class="titre"><?php _e('Maroc','blacode'); ?></div>
								<div class="pictos">
									<div class="pictos_tab">
										<div class="tab">
											<button class="tablinks_1" onclick="openCity_1(event, 'smartphone_1')" id="defaultOpen_1">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/smartphone.png" alt="">
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
											<button class="tablinks_1" onclick="openCity_1(event, 'placeholder-outline_1')">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/placeholder-outline.png" alt="">												
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
											<button class="tablinks_1" onclick="openCity_1(event, 'flying-paper-plane_1')">
												<img src="<?php bloginfo( 'template_url' ) ?>/img/flying-paper-plane.png" alt="">												
												<img class="form" src="<?php bloginfo( 'template_url' ) ?>/img/form.png" alt="">
											</button>
										</div>

										<!-- Tab content -->
										<div id="smartphone_1" class="tabcontainer tabcontent_1">
											<span><a href="tel:+212539321118">+212 5 39 32 11 18</a></span>
										</div>

										<div id="placeholder-outline_1" class="tabcontainer tabcontent_1">
											<span>8 rue Al Farabi - Tanger</span> 
										</div>

										<div id="flying-paper-plane_1" class="tabcontainer tabcontent_1">
											<span><a href="mailto:contact@comenscence.com">contact@comenscence.com</a></span>
										</div>
									</div>
								</div>
							</div> 


							<div class="bloc">
								<div class="titre"><?php _e('Ailleurs','blacode'); ?></div>
								<div class="pictos">
									 <div class="reseaux_links">
										 <a target="_blank" href="https://www.facebook.com/agenceblacode">
										 	<i class="fab fa-facebook-square"></i>
										 </a>
										 <a target="_blank" href="https://www.linkedin.com/in/virginie-ruyer-zen-nan-94249048">
										 	<i class="fab fa-linkedin"></i>
										 </a>
										 <!-- <a href="#">
										 	<i class="fab fa-instagram"></i>
										 </a> -->
									 </div>
								</div>
							</div> 
 
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</div>
</section>
<?php } ?>