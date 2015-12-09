<!DOCTYPE html>
<html ng-app="wedstrijdPlatform" lang="en">
<head>
<?php
	include "html/header.html";
?>

</head>
<body > <!-- onload="start();"  stond hier nog in? -->

<?php 
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
									
								print_r($user);
						
						echo "<h1>User was get from session! email = " . $_SESSION['email'] . "</h1>"; /////////////////////////////////delete
						
                        include 'html/nav.html';
						if($user['admin'] == 1){
                            echo "<h1>Admin logged in.</h1>";
						}
                        else{
							echo "<h1>Normal user logged in.</h1>";
						}
						include 'php/home.php';
						
						session_destroy(); //moet weg, staat hier enkel voor test
                    }
                    /* User is not logged in yet */
                    /* Check if any post data is send */
                    else if(isset($_POST['inputEmail'], $_POST['inputPassword']))
                    {
						$database = new medoo();

                        $email = $_POST['inputEmail'];			//hier moet nog safe_text rond OF moet eerst met JS gecheckt worden in angular!
                        $password = $_POST['inputPassword'];	//hier moet nog safe_text rond OF moet eerst met JS gecheckt worden in angular!

						echo "<h1>User was get from post! email = $email , ww = $password</h1>"; /////////////////////////////////delete
						
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
									
									print_r($user);
									
							include 'html/nav.html';
							include 'html/login_success.html';
                            
							if($user['admin'] == 1){
								echo "<h1>Admin logged in.</h1>";
							}
							else{
								echo "<h1>Normal user logged in.</h1>";
							}
							include 'php/home.php';
                        }
                        else
                        {
                            include 'html/nav.html';
                            include 'html/failed_login.html';						
                        }
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