<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logoicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>Area Master</title>
</head>
<body>
<img id="logo" src="imagens/logorcs.png" alt="">

<div id=corpo-form>
    <h1>Portal do Gestor</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label>Escolha um colaborador</label> <br>
        <select name="nome">
        <option >Colaborador</option>
        <?php foreach ($results as $output) {?>
        <option>
        <?php echo $output["NOME"];?></option>
        <?php }?>
        </select><br> <br>

        <form method="POST" action="" enctype="multipart/form-data">
        <label>Escolha um mês</label> <br>
        <select name="mes">
        <option >Mês</option>
        <?php foreach ($result as $output) {?>
        <option>
        <?php echo $output["MES"];?></option>
        <?php }?>
        </select><br> <br>
        

        
        <label>CONTRA-CHEQUE</label>
        <input type="file" name= "contracheque">    
        <input type="submit" value="Enviar">
        </form>

        <form action="index.php">
        <input type="submit" value="VOLTAR">
        </form>
</div>
 
<?php
use LDAP\Result;
include("conexao.php");

$hostname="localhost";
$db="projeto_login";
$Username="root";
$Password= null;
  
$conn= new PDO("mysql:host=$hostname;dbname=$db", $Username, $Password);
$sql= "Select NOME from usuarios";
$sqlmes= "Select MES from mes";
//$sqlm= "select MES from mes";

try{
    $consunome=$conn->prepare($sqlmes);
    $consunome->execute();
    $result=$consunome->fetchAll();


    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $results=$stmt->fetchAll();

}
catch(exception $ex){
    echo($ex -> getMessage());
}


if(isset($_FILES['contracheque'])) {
    $arquivo = $_FILES['contracheque'];

    if($arquivo['error'])
    die("Falha ao enviar o arquivo!");

    if($arquivo['size'] > 5000000)
    die("Arquivo muito grande, Max 5MB."); 
    
    $mes = $_POST['mes'];
    $nome = $_POST['nome'];
    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "pdf")
    die("Tipo de arquivo inválido!");

    $path =  $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path); 

    if($deu_certo)  {
        $mysqli->query("INSERT INTO contra_cheque (nome, contracheque, colaborador, mes) VALUES ('$nomeDoArquivo','$path', '$nome', '$mes')") or die($mysqli->error);
        echo "<p>Arquivo enviado com sucesso.</p>";
    }
    else{
        echo "<p>Falha ao enviar arquivo.</p>";
    }
}
    
?>



</body>

</html>
