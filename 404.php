<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blacode
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<section class="error-404 not-found">  
					<img src="<?php bloginfo( 'template_url' ) ?>/img/404.jpg" alt="404">
				<div class="page-content">
					<p><?php esc_html_e( 'We couldn’t find what you’re looking for.', 'blacode' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn custom-btn"><?php esc_html_e('Explore Blacode', 'blacode'); ?></a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
