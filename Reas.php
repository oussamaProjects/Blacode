<?php
/* Template Name: Réalisation*/
require( 'header.php' );  
$ID = get_the_ID();?>

<?php 
$args = array('post_type' => 'projet', 'posts_per_page' => 2, 'order' => 'DESC', 'orderby' => 'menu_order', 'post_status' => 'publish');
$realisation = new WP_Query( $args ); 

$viwed = $realisation->post_count;
$total = $realisation->found_posts;
$remaining = $total - $viwed;
$if_remaining = "false";
$pagination = 1;
if($remaining > 0) $if_remaining = "true"; ?>

<!--*******************************     realisation   -->
 
<div id="realisationContent">
	<?php require( 'contents/blocRealisations.php' ); ?>
</div>		 

<!--*******************************     END realisation   -->

<?php $call_to_action = get_field('call_to_action', $ID);  ?>
<?php include 'contents/bandeau.php'; ?>

<?php require( 'footer.php' ); ?>