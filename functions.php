<?php 
add_action( 'wp_ajax_addEventToCalandar', 'addEventToCalandar' );
add_action( 'wp_ajax_nopriv_addEventToCalandar', 'addEventToCalandar' );

function addEventToCalandar(){
	global $current_user;
	get_currentuserinfo();
	$eventId = $_POST['eventId'];
	$calPod = pods( 'calandar');

	$data = array(
	    'author' => $current_user->ID,
	    'event' => $eventId
	); 
	$newCalItemId = $calPod->add($data);

	echo $newCalItemId;
	exit;
}


?>