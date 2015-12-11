<?php

//eerst controleren of er wel toegang is tot de API (beveiligen met username & password)
	include './assets/php/medoo.min.php';
	
	$database = new medoo();
	
	$email = trim($_GET['email']); 
	
	echo $database->count("gebruikers", ["AND" => ["email" => $email]]);
?>