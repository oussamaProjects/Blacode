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

				<div class="header_messages">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="first_message message">
								Contactez-nous ou rendez-vous sur <a href="https://comenscene.com"> www.comenscene.com</a>
								</div>
							</div>
							<div class="offset-md-4 col-md-4">
								<div class="second_message message">
								Hello, comment renforcer la visibilité de mon entreprise sur internet?
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
		
</div>