<!DOCTYPE html>
<html ng-app="wedstrijdPlatform" lang="en">
<head>
<?php
	include "assets/html/header.html";
?>

</head>
<body>

<?php 
/*
	Miss is het beter om van de angular views php files te maken en daar de php in te zetten?
	session controle kan dan gesplitst worden en in elke view gecontroleerd worden.
	Probleem nu: alle php in index.php en wordt bij elke klik op een link van het menu uitgevoerd!
	--> het grootste deel van deze code komt dan in de home view.
	
	--> GAAT NIET! DE VIEWS WORDEN DYNAMISCH INGELADEN BINNEN INDEX.PHP!
*/
					/*session_start();
                    require_once 'assets/php/medoo.min.php';
                    $database = new medoo();
					
					require_once 'assets/php/functies.php';
					require_once 'assets/php/registreren.php';*/
					
                    /* Check if user is previously logged in */
                    /*if(isset($_SESSION['isLoggedIn'], $_SESSION['email']) && $_SESSION['isLoggedIn'] == "true")
                    {
                        $user = $database->get(
                                    "gebruikers", "*", [
                                    "AND" => [
                                    "email" => $_SESSION['email']
                                    ]]);
									
								//print_r($user);
	
 
                        include 'assets/html/nav.html';
						include 'assets/html/login_success.html';						
						include 'phpAPI/home.php';
						
						//header("Location: /wedstrijdplatform/#/spelpagina"); //dit mag hier niet, zorgt voor eindeloze redirect ( na post ziet hij dat er al een sessie is dus komt hij hier en gaat hij nogmaals doorverwijzen
						//naar spelpagina, en dit blijft zich herhalen, dit stond hier omdat je als je al ingelogd bent, dat je automatisch de spelpagina ziet en niet opnieuw moet inloggen)
						
						include "assets/html/footer.html";
						
						//session_destroy(); //moet weg, staat hier enkel voor test
                    }
                    // User is not logged in yet 
                    // Check if any post data is send 
                    else if(isset($_POST['inputEmail'], $_POST['inputPassword']))
                    {
						$database = new medoo();

                        $email = trim($_POST['inputEmail']);
						                       
						
                        // Check for correct email and password 
                        $emailExists = $database->count("gebruikers", [
                                    "AND" => [
                                    "email" => $email
                                    ]]);

                        // If exectly one user has been found 
                        if($emailExists == 1)
                        {	
							$enteredPassword = trim($_POST['inputPassword']);
							
							$user = $database->get(
                                    "gebruikers", "*", [
                                    "AND" => [
                                    "email" => $email
                                    ]]);
									
							//print_r($user);
							
							$dbpassword = $user['wachtwoord'];
							
							if (password_verify($enteredPassword, $dbpassword)) {
								$_SESSION['email'] = $email;
								$_SESSION['isLoggedIn'] = "true";
								
								/*include 'html/nav.html';
								echo "<h1>User was get from post!</h1>"; /////////////////////////////////delete
								include 'html/login_success.html';
								echo "<h1>Normal user logged in.</h1>";
								include 'php/home.php';*/
							
						/*		header("Location: /wedstrijdplatform/#/spelpagina");
							}
							else{
								include 'assets/html/nav.html';
								include 'assets/html/failed_login.html';
								include 'phpAPI/home.php';
							}
	
                        }
                        else
                        {
                            include 'assets/html/nav.html';
                            include 'assets/html/failed_login.html';
							include 'phpAPI/home.php';
                        }
						
						include "assets/html/footer.html";
                    }
                    //User has not logged in yet and has not send any post data 
                    else
                    {*/
						//echo "<h1>User was not logged in yet!</h1>"; /////////////////////////////////delete
						
                        include 'assets/html/nav.html';

                        include 'phpAPI/home.php';
						
						include "assets/html/footer.html";
                    //}
?>
</body>
</html>