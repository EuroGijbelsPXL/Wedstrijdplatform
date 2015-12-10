<!DOCTYPE html>
<html ng-app="wedstrijdPlatform" lang="en">
<head>
<?php
	include "html/header.html";
?>

</head>
<body>

<?php 
/*
	Miss is het beter om van de angular views php files te maken en daar de php in te zetten?
	session controle kan dan gesplitst worden en in elke view gecontroleerd worden.
	Probleem nu: alle php in index.php en wordt bij elke klik op een link van het menu uitgevoerd!
	--> het grootste deel van deze code komt dan in de home view.
*/

					session_start();
                    require_once 'php/medoo.min.php';
                    $database = new medoo();
					
                    /* Check if user is previously logged in */
                    if(isset($_SESSION['isLoggedIn'], $_SESSION['email']) && $_SESSION['isLoggedIn'] == "true")
                    {
                        $user = $database->get(
                                    "gebruikers", "*", [
                                    "AND" => [
                                    "email" => $_SESSION['email']
                                    ]]);
									
								//print_r($user);


	require_once 'assets/php/functies.php';
	require_once 'assets/php/registreren.php';
	
 
                        include 'html/nav.html';
						echo "<h1>User was get from session! email = " . $_SESSION['email'] . "</h1> <a href='php/logout.php'>Logout</a>"; /////////////////////////////////delete
						
						if($user['admin'] == 1){ //admin moet hier eigenlijk niet, want die loggen in via hun persoonlijke URL (en moeten altijd WW ingeven)
                            echo "<h1>Admin logged in.</h1>";
						}
                        else{
							echo "<h1>Normal user logged in.</h1>";
						}
						
						include 'php/home.php';
						
						//header("Location: /wedstrijdplatform/#/spelpagina"); //dit mag hier niet, zorgt voor eindeloze redirect ( na post ziet hij dat er al een sessie is dus komt hij hier en gaat hij nogmaals doorverwijzen
						//naar spelpagina, en dit blijft zich herhalen, dit stond hier omdat je als je al ingelogd bent, dat je automatisch de spelpagina ziet en niet opnieuw moet inloggen)
						
						include "html/footer.html";
						
						//session_destroy(); //moet weg, staat hier enkel voor test
                    }
                    /* User is not logged in yet */
                    /* Check if any post data is send */
                    else if(isset($_POST['inputEmail'], $_POST['inputPassword']))
                    {
						$database = new medoo();

                        $email = trim($_POST['inputEmail']);
                        $password = sha1(trim($_POST['inputPassword']));
						
                        /* Check for correct email and password */
                        $dblogin = $database->count("gebruikers", [
                                    "AND" => [
                                    "email" => $email,
                                    "wachtwoord" => $password
                                    ]]);

                        /* If exectly one user has been found */
                        if($dblogin == 1)
                        {
							$_SESSION['email'] = $email;
                            $_SESSION['isLoggedIn'] = "true";


                            $user = $database->get(
                                    "gebruikers", "*", [
                                    "AND" => [
                                    "email" => $email,
                                    "wachtwoord" => $password
                                    ]]);
									
									//print_r($user);
									
							include 'html/nav.html';
							echo "<h1>User was get from post! email = $email , ww = $password</h1>"; /////////////////////////////////delete
							include 'html/login_success.html';
							echo "<h1>Normal user logged in.</h1>";
							include 'php/home.php';
							
							header("Location: /wedstrijdplatform/#/spelpagina");
                        }
                        else
                        {
                            include 'html/nav.html';
                            include 'html/failed_login.html';
							include 'php/home.php';
                        }
						
						include "html/footer.html";
                    }
                    /* User has not logged in yet and has not send any post data */
                    else
                    {
						echo "<h1>User was not logged in yet!</h1>"; /////////////////////////////////delete
						
                        include 'html/nav.html';

                        include 'php/home.php';
						
						include "html/footer.html";
                    }
?>
</body>
</html>