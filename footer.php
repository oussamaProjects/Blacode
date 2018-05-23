<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blacode
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/logo_footer.png" alt="">
				</div>
				<div class="col-md-11">
				
				<ul class="footer-info">
				<li>copyright Blacode 2018</li>
				<li><a href="<?php the_permalink( 173 ) ?>">Mentions légales</a></li>
				<li><a href="<?php the_permalink( 175 ) ?>">Conditions Générales de vente</a></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:hello@blacode.fr">hello@blacode.fr</a></li>
				<li><i class="fa fa-fix"></i><a href="tel:0176410426">01 76 41 04 26</a></li>
				<li><i class="fa fa-fix"></i><span>6 rue du Bois Sauvage 91000 Évry</span></li>
				</ul>
				
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<a href="#GoToHeader" class="GoToHeader"></a>

<script type="text/javascript">   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>"; </script> 

<div id="ajaxShadow">
	<div id="ajaxloader"></div>
</div>

<?php wp_footer(); ?>

</body>
</html>
