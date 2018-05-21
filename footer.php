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
				<div class="col-md-4">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/logo_footer.png" alt="">
				</div>
				<div class="col-md-8">
				
				<ul class="footer-info">
				<li><i class="fa fa-envelope"></i><a href="mailto:bonjour@blacode.com">bonjour@blacode.com</a></li>
				<li><i class="fa fa-fix"></i><a href="tel:0123458939">01 23 45 89 39</a></li>
				<li><i class="fa fa-fix"></i><span>Chemin Challet 870000 LIMOGES</span></li>
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
