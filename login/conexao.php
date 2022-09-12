<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "projeto_login";

$mysqli = new mysqli($host, $user, $pass, $bd);
$pdo = new PDO("mysql:host=$host;bd=$bd", $user, $pass);


if($mysqli->connect_errno) {
    echo " Connect failed: " . $mysqli->connect_error;
    exit();

}






























//define('HOST', 'localhoste');
//define('USER', 'root');
//define('PASS', '');
//define('DBNAME', 'projeto_login');

//$conn = new PDO('mysql:host'. HOST . ';dbname=' . DBNAME . ';',USER, PASS);
//$sql= "select NOME from usuarios";
//try{
//    $stmt=$conn->prepare($sql);
//    $stmt->execute();
//    $results=$stmt->fetchAll();
//}
//catch(exception $ex){
//    echo($ex -> getMessage());//
//}


?>