<?php 
//Ajax filtre projets
add_action( 'wp_ajax_get_actus', 'get_actus' );
add_action( 'wp_ajax_nopriv_get_actus', 'get_actus' );
function get_actus(){

	$args = array('order' => 'DESC', 'orderby' => 'menu_order', 'post_status' => 'publish');

	$posts_per_page = 8;
	$pagination = 1;
	$if_remaining = $_POST['ifremaining'];
	$paged = 1;
	
	$pagination = ((int)$_POST["pagination"]);
	if($if_remaining) {
		$pagination++;
		$posts_per_page = $pagination * $posts_per_page;
	}
	else $pagination = 1;
	
	$args['posts_per_page'] = $posts_per_page;
	$args['paged'] = $paged;
	$Actualites = new WP_Query($args);
	$total = $Actualites->found_posts;
	
    if( ! $Actualites ) return;
	
	$viwed = $Actualites->post_count;
	$remaining = $total - $viwed;
	
    if($remaining > 0) $if_remaining = "true";
    else $if_remaining = "false";
    
    $a = 0 ;

    include( realpath(dirname(__FILE__).'/..').'/contents/blocActualites.php' ); 

	die();
}