<?php
 
require_once('model/model_media/connection_database.php'); 

function authentication(String $input_email, String $input_password){
    
	$user = (new CatalogUsers())->check_user_in_catalog($input_email, $input_password);
	
	$_SESSION['LOGGED_USER'] = serialize($user);
	
	setcookie(
		'LOGGED_USER',
		serialize($user),
		[
			'expires' => time() + 365*24*3600,
			'secure' => true,
			'httponly' => true,
		]
	);  
	
	header('Location:index.php');
	}

