<?php	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function controleer_email($email) {
		$database = new medoo();
		
		$emailExists = $database->count("gebruikers", [
            "AND" => ["email" => $email]]);

        /* If exectly one user has been found */
        if($emailExists == 1)
        {
			return false;
		}
		else{
			return true;
		}	
		
	}
?>