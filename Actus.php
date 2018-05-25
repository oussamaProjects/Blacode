<?php
/* Template Name: Actualites*/
require( 'header.php' );  ?>

<?php 
$args = array('posts_per_page' => 8, /*'order' => 'DESC', 'orderby' => 'menu_order',*/ 'post_status' => 'publish');
$Actualites = new WP_Query( $args ); 

$viwed = $Actualites->post_count;
$total = $Actualites->found_posts;
$remaining = $total - $viwed;
$if_remaining = "false";
$pagination = 1;
if($remaining > 0) $if_remaining = "true"; ?>

<!--*******************************     actualites   -->

<section class="container">
	<div id="actualitesContent" class="row">
		<?php require( 'contents/blocActualites.php' ); ?>
	</div>		
</section>

<!--*******************************     END actualites   -->

<?php require( 'footer.php' ); ?>