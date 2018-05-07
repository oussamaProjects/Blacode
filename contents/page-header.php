<div id="page_header" class="page_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top_header">
					<div class="site-branding"> 
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php bloginfo( 'template_url' ) ?>/img/logo.png" alt="">
						</a>
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
		</div>
	</div>
</div>