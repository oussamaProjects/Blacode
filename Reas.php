<?php
/* Template Name: Réalisation*/
require( 'header.php' );  ?>

<?php 
$args = array('post_type' => 'projet', 'posts_per_page' => 8, 'order' => 'DESC', 'orderby' => 'menu_order', 'post_status' => 'publish');
$realisation = new WP_Query( $args ); 

$viwed = $realisation->post_count;
$total = $realisation->found_posts;
$remaining = $total - $viwed;
$if_remaining = "false";
$pagination = 1;
if($remaining > 0) $if_remaining = "true"; ?>

<!--*******************************     realisation   -->
 
<div id="realisationContent">
	<?php require( 'contents/blocrealisation.php' ); ?>
</div>		 

<!--*******************************     END realisation   -->

<?php require( 'footer.php' ); ?>