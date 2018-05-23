<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blacode
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div id="fixed_header" class="fixed_header page_header"> 
	<div class="top_header">
		<div class="site-branding"> 
			<div class="logo_container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/logo.png" alt="">
				</a>
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blacode' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation --> 
	</div> 
</div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blacode' ); ?></a>

<header id="masthead" class="site-header">
<?php if (is_home()) { ?>
	<?php get_template_part( 'contents/home','header' )  ?>
<?php } else { ?>
	<?php get_template_part( 'contents/page','header' )  ?>
<?php } ?>

</header><!-- #masthead -->

<div id="content" class="site-content">
