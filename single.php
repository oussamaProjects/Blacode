<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				get_template_part( 'template-parts/content', get_post_type() );
				//the_post_navigation();

			endwhile; // End of the loop.
			?>
 
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php $call_to_action = get_field('call_to_action', get_the_ID());  ?>
	<?php include 'contents/bandeau.php'; ?>
	
<?php 
get_footer();
