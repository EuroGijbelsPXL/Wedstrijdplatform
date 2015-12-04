<?php
require_once 'php/medoo.min.php';
$database = new medoo();

echo "<h1>Overzicht gebruikers tabel</h1>";

$datas = $database->select("Gebruikers", [
    "gebruikerID",
    "email",
    "wachtwoord"
]);

foreach($datas as $data)
{
    echo "ID: " . $data["gebruikerID"] . " - email: " . $data["email"] . " - wachtwoord: " . $data["wachtwoord"] . "<br/>";
}

//insert (best activeren na knop ofzo)
$database->insert("Gebruikers", [
    "email" => "jarno@test.be",
    "wachtwoord" => "test"
]);
echo "Jarno toegevoegd <br/>";


//delete
$database->delete("Gebruikers", [
    "AND" => [
        "email" => "jarno@test.be"
	]
]);
echo "Jarno verwijderd <br/>";


//meer info: http://medoo.in/api/new
?>