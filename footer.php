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
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/logo_footer.png" alt="">
				</div>
				<div class="col-md-10">
				<!-- TODO: Rendre ça dynamique -->
				<ul class="footer-info">
				<li>&copy; Blacode <?php echo date('Y'); ?></li>
				<li><a href="<?php the_permalink( 173 ) ?>">Mentions légales</a></li>
				<li><a href="<?php the_permalink( 175 ) ?>">Conditions Générales de vente</a></li>
				<li><a href="<?php the_permalink( 206 ) ?>">Politique de confidentialité</a></li>
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
