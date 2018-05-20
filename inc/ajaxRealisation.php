<?php 
//Ajax filtre projets
add_action( 'wp_ajax_realisationAction', 'realisationAction' );
add_action( 'wp_ajax_nopriv_realisationAction', 'realisationAction' );

function realisationAction(){

	$args = array(
		'post_type' 	=> 'projets', 
		'order' 		=> 'DESC', 
		'orderby' 		=> 'menu_order', 
		'post_status' 	=> 'publish'
	);

	if ( isset($_POST["cat_projet"])  && $_POST["cat_projet"] != "0" ){
		$args['tax_query'] =  array(
			array(
				'taxonomy' 	=> 'type',
				'field' 	=> 'id',
				'terms' 	=> $_POST["cat_projet"]
			)
		);
	}
	
	$posts_per_page = 2;
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
	$realisations = new WP_Query($args);
	$total = $realisations->found_posts;
	
	if( ! $realisations ) return;
	
	$viwed = $realisations->post_count;
	$remaining = $total - $viwed;
	
	if($remaining > 0) $if_remaining = "true";
	else $if_remaining = "false";

	$a = 0 ;

	json_decode($realisations);
	

	include( realpath(dirname(__FILE__).'/..').'/contents/blocRealisations.php' );

	die();
}