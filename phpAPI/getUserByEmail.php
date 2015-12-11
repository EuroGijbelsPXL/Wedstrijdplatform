<?php

//eerst controleren of er wel toegang is tot de API (beveiligen met username & password)
	require_once('../assets/php/medoo.min.php');
	
	$database = new medoo();
	
	$decoded = json_decode(file_get_contents('php://input'),true); //data uit http post request halen.
	
	$email = trim($decoded['email']); 	
	
	$emailExists = $database->count("gebruikers", [
                                    "AND" => [
                                    "email" => $email
                                    ]]);

    // If exectly one user has been found 
    if($emailExists == 1){	
		$enteredPassword = trim($decoded['wachtwoord']);
							
		$user = $database->get("gebruikers", "*", [
                                "AND" => [
                                "email" => $email
                                ]]);
								
		$dbpassword = $user['wachtwoord'];
							
		if (password_verify($enteredPassword, $dbpassword)) {
			echo json_encode($user);
		}else{
			echo "false";
		}
	}else{
		echo "false";
	}
?>