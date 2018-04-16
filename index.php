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
 */

get_header();
?>



<section class="index_container">
<div class="container">
	<div class="row">
		<div class="offset-md-2 col-md-8 ">

<h2>
Agence de communication digitale
</h2>
<p>
Depuis 2009, Blacode accompagne les marques… 
Acteurs du changement,  nous adorons les nouveaux projets, collaborons avec passion et rassemblons <a href="#">nos talents</a> pour servir vos ambitions et réussir votre développement business web et mobile.	
</p>
<h3>
Les meilleurs experts sur chaque métier
</h3>
<p>Un design au meilleur niveau au Maroc
Une équipe de développeurs de très haut niveau
Une gestion de projet expérimentée
Des compétences web marketing complètes
</p>
<h3>
Une transparence commerciale totale
	
</h3>
<p>
Propriété des travaux transmise aux clients dans leur intégralité,
Aucun abonnement contraignant, aucune dépendance vis-à-vis de l’agence.
</p>
		</div>
	</div>
</div>


</section>

<section class="bandeau">
	<div class="info">
		<div class="conatiner">
			<div class="row">
				<div class="col-md-12">
					<div class="titre">
						Un projet ? Discutons-en !
					</div>
					<div class="description">
						Nous possédons une réelle expertise UI & UX et soignons nos clients			
					</div>
					<a href="#"> <?php _e('Rencontrons-nous','blacode'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
