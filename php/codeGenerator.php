<?php
/**
 * Created by PhpStorm.
 * User: Jarno
 * Date: 09/12/15
 * Time: 15:29
 */

//proberen een code te genereren en in de database te steken en die methode in ne for loop te steke

function generateCode($count, $num_char) {
    $tokens = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $code_string = "";
    $codeArray = array();
    $dbCodes = getCodes();

    for ($i = 0; $i < $count; $i++) {
        $code_string = "";
        for ($j = 0; $j < $num_char; $j++) {
            srand();
            $code_string .= $tokens[rand(0, 35)];
            //$segment = "";
            /*for ($k = 0; $k < $segment_chars; $k++) {
                srand();
                $segment .= $tokens[rand(0, 35)];
            }
            $code_string .= $segment;

            if ($j < ($num_segments - 1)) {
                $code_string .= "-";
            }*/
        }

        if (checkDuplicate($codeArray, $code_string)) {
            array_push($codeArray, $code_string);
        } else {
            echo "<p>Duplicate: ". $code_string. " " . $i."</p>";
        }
        //echo "<p>Check done and code put into array.".$i."</p>";
    }

    showCodes($codeArray);
    putCodesInDb($codeArray);

    //echo "<p>Check done and codes put into array.</p>";
    return $codeArray;
}

function checkDuplicate($codes, $newCode) {
    $bool = true;

    //Check newly generated codes for duplicate
    foreach($codes as $code) {
        if ($newCode === $code) {
            $bool = false;
            break;
        }
    }
    return $bool;
}

//Shows codes in list on page
function showCodes($codes) {
    $count = 0;
    echo "<ul>";
    foreach($codes as $code) {
        echo "<li>" . $code . " " . $count . "</li>";
        $count++;
    }
    echo "</ul>";
}

function getCodes() {
    require_once("medoo.min.php");

    $db = new medoo();
    $dbCodes = $db->select("codes", "code", ["wedstrijd_id" => 1]);

    return $dbCodes;
}

function putCodesInDb($codes) {
    require_once("medoo.min.php");

    $db = new medoo();

    $sql = "INSERT INTO codes (wedstrijd_id, code) VALUES ";
    $it = new ArrayIterator($codes);
    $cit = new CachingIterator($it);

    foreach($cit as $code) {
        /*$lastCodeId = $db->insert("codes", [
            "wedstrijd_id" => 1,
            "code" => $codes
        ]);*/
        $sql .= "('1','".$code."')";
        if ($cit->hasNext()) {
            $sql .= ",";
        }
    }
    $db->query($sql);
}