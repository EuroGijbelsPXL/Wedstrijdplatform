<?php	
	
	if (isset($_POST['registreren'])) {
		$email = test_input($_POST["inputEmail"]);
		$inputPassword1 = test_input($_POST["inputPassword1"]);
		$inputPassword2 = test_input($_POST["inputPassword2"]);

		$database = new medoo();
		
		$hash =  password_hash($inputPassword1, PASSWORD_DEFAULT); //Moet nog een check of het gefaild is of niet
		
		if(controleer_email($email)){
			$last_user_id = $database->insert("gebruikers", [
			"email" => $email,"wachtwoord" => $hash]);
			if($last_user_id != 0){
				//laten zien dat de gebruiker is opgeslagen
			}else{
				//foutmelding laten zien dat de gebruiker niet is kunnen opslaan eh
			}			
		}else{
			echo "email bestaat al dus pech";//error message laten zien dat email al bestaat
		}
		
	}
?>