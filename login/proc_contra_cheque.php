<?php

if(!isset($_GET['mes'])) {
    header("Location: index.php");
    exit;
}

$mes = "%".trim($_GET['mes'])."%";

$hostname="localhost";
$db="projeto_login";
$Username="root";
$Password= null;

$conn= new PDO("mysql:host=$hostname;dbname=$db", $Username, $Password);

$sth = $conn->prepare("SELECT * FROM contra_cheque WHERE 'data' LIKE  :mes");

$sth->bindParam (':mes', $mes, PDO::PARAM_STR);

$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

print_r($resultados);
exit;


?>