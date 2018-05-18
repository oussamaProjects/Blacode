<?php
/* Template Name: Contact*/
require( 'header.php' );  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
			while ( have_posts() ) :
				the_post(); 
				get_template_part( 'template-parts/content', 'contact' ); 
			endwhile; // End of the loop.
		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php require( 'footer.php' ); ?>