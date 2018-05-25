<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="rea_head"> 
                    <h1 class="h2">
                        <?php _e('Réalisations', 'blacode'); ?>
                    </h1> 
                    <div class="cats">
                        <ul>
                            <?php  $args = array( 
                                'title_li' => '',
                                'taxonomy' => 'cat_projet',
                                'hide_empty' => false,
                            );
                            wp_list_categories( $args ); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
		<?php if ( have_posts() ) : $i = 0;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$i++;
				?>
				<div class="project-row">
				<?php
				$rea_image_header = get_field('rea_image_header'); 
				if($rea_image_header){ ?> 
				<a href="<?php the_permalink( ) ?>">
				<div class="page_bandeau" style="background-image: url(<?php echo $rea_image_header['url'] ?>);" ></div>
				</a>
				<?php } ?>

					<div class="container">
					<div class="row">
						<div class="offset-md-2 col-md-8">
							<div class="rea"> 
								<div class="titre">
									<a href="<?php the_permalink( ) ?>">
										<?php the_title(); ?> 
									</a>
								</div> 
								<div class="description">
									<?php the_excerpt(); ?>
								</div>
								<div class="post_cats">
									<?php the_terms( get_the_ID(), 'cat_projet', '', ' - ' ); ?>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				</div>
				<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		
		<?php 
		// Récuperation du CTA de la page réalisations
		$call_to_action = get_field('call_to_action', 10);  ?>
		<?php include 'contents/bandeau.php'; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
