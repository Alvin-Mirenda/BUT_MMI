<?php
$servername = "localhost";
$user = "u181332438_sae301";
$pass = "sae301-MMI";



try {
    $db =new PDO('mysql:host=localhost;dbname=u181332438_sae301;port=3306;charset=utf8', 'u181332438_sae301', 'sae301-MMI');
   
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>