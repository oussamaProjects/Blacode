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

	<div id="bm"></div>
		
	<div class="scroll-down">
		<i class="fas fa-chevron-down"></i>
	</div>

</div>