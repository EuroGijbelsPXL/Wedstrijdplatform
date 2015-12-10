<!DOCTYPE html>
<html ng-app="wedstrijdPlatform" lang="en">
<head>
<?php
	include "html/header.html";
?>

</head>
<body onload="start();">

<?php
	require_once 'php/medoo.min.php';
	require_once 'assets/php/functies.php';
	require_once 'assets/php/registreren.php';
	
    include 'html/nav.html';
	include 'php/home.php';
	include "html/footer.html";
?>
</body>
</html>