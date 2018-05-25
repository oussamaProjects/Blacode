<div id="home_header" class="home_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="top_header">

					<div class="site-branding">
						<?php the_custom_logo();?> 
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

				<!-- <div class="header_messages">
				</div> -->
			</div>
		</div>
	</div>
</div>
<?php if (!is_404()) { ?>
<!-- poster="<?php echo get_template_directory_uri() . '/img/home_video_poster.jpg'; ?>" -->
<video class="home-video" muted autoplay>
	<source src="<?php echo wp_get_attachment_url(293); ?>" type="video/mp4">
</video>
<div class="scroll-down">
	<img src="<?php echo get_template_directory_uri() . '/img/angle_bottom.png'; ?>" alt="Suivant">
</div>

<?php } ?>