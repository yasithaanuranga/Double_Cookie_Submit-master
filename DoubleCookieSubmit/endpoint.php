<?php
	session_start();

	// $session_id = $_POST['session_id'];

	$current_token = $_COOKIE['csrf'];

	echo json_encode(array("id" => $current_token));
?>