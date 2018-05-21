<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blacode
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
				while ( have_posts() ) :
					the_post(); 
					get_template_part( 'template-parts/content', 'page' ); 
				endwhile; // End of the loop.
			?>

			<? if ( get_the_ID() == 8 ) include 'contents/expertises.php';  ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php $ID = get_the_ID();
	$call_to_action = get_field('call_to_action', $ID);  ?>
	<?php include 'contents/bandeau.php'; ?>

<?php 
get_footer();
