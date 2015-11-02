<?php session_start();
                    require_once 'php/medoo.min.php';
                    $database = new medoo();
                    /* Check if user is previously logged in */
                    if(isset($_SESSION['username'], $_SESSION['password']))
                    {
                        $user = $database->get(
                                    "Gebruikers", "*", [
                                    "AND" => [
                                    "email" => $_SESSION['username'],
                                    "wachtwoord" => $_SESSION['password']
                                    ]]);
                        include 'html/nav.html';
							if($_SESSION['username'] == 'Admin')
                                include 'php/home.php';
                            else
								include 'php/home.php';
                    }
                    /* User is not logged in yet */
                    /* Check if any post data is send */
                    else if(isset($_POST['inputEmail'], $_POST['inputPassword']))
                    {
                        $database = new medoo();

                        $username = $_POST['inputEmail'];
                        $password = $_POST['inputPassword'];

                        /* Check for correct username and password */
                        $dblogin = $database->count("Gebruikers", [
                                    "AND" => [
                                    "email" => $username,
                                    "wachtwoord" => $password
                                    ]]);

                        /* Incorrect username and / or password */
                        if($dblogin == 0)
                        {
                            include 'html/nav.html';
                            include 'html/failed_login.html';
                        }
                        else
                        {
                            $_SESSION['username'] = $username;
                            $_SESSION['password'] = $password;

                            $user = $database->get(
                                    "Gebruikers", "*", [
                                    "AND" => [
                                    "naam" => $username,
                                    "wachtwoord" => $password
                                    ]]);
							include 'html/nav.html';
							include 'html/login_success.html';
                            
							if($_SESSION['username'] == 'Admin')
                                include 'php/home.php';
                            else
								include 'php/home.php';
							
                        }
                    }
                    /* User has not logged in yet and has not send any post data */
                    else
                    {
                        include 'html/nav.html';

                        include 'php/home.php';
						
						include "html/footer.html";
                    }
?>