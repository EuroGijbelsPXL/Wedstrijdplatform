<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Codes:</h1>
    <?php
    include_once("php/codeGenerator.php");
    //$codes = generateCode(25, 5, 4);
    //showCodes($codes);
    if(!isset($_POST["number"])) {
        ?>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <input type="number" id="number" name="number"/>
            <input type="submit" value="Generate"/>
        </form>
        <?php
    } else {
        $codes = generateCode($_POST["number"], 12);
        //putCodesInDb($codes);
    }
    ?>
</body>
</html>