<?php
require_once 'usuarios.php';
$u = new Usuarios;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logoicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Colaborador</title>
</head>
<body>

    
<div id=corpo-form>
    <h1>Cadastrar Colaborador</h1>
    <form method="POST" action="cadastrar.php">
        <input type="text" name= "nome" placeholder="Nome" maxlength=30>
        <input type="text" name= "matricula" placeholder="Matricula" maxlength=4>
        <input type="email" name= "email" placeholder="Email" maxlength=46>
        <input type="password" name= "senha" placeholder="Senha" maxlength=15>
        <input type="password" name= "confsenha" placeholder="Confirmar Senha" maxlength=15>
        <input type="submit" value="CADASTRAR">
        </form>
        </div>

<form action="index.php">
<input type="submit" value="VOLTAR">

</form>
<?php
if(isset($_POST['nome']))
{
        $nome = addslashes($_POST['nome']);
        $matricula = addslashes($_POST['matricula']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confsenha = addslashes($_POST['confsenha']);

        if(!empty($nome) && !empty($matricula) && !empty($email) && !empty($senha) && !empty($confsenha))
        {
            $u->conectar("projeto_login","localhost", "root","");
        if($u->msgError == "")
        {
        if($senha == $confsenha)
        {
            if($u->cadastra($nome, $matricula, $email, $senha))
        {         
            ?>
            <div id="msg-sucesso">
            Cadastrado com sucesso!
            </div> 
            <?php

        }else{

            ?>
            <div class="msg-erro">
            Email ja cadastrado!
            </div> 
            <?php
            

        }

        }else
        {
            ?>
            <div class="msg-erro">
            Senha e confirmar senha não correspondem!
            </div> 
            <?php
            
        }             
        }else
        {

            echo "Erro: ".$u->msgError;
        }

        
        }else
        {
            ?>
            <div class="msg-erro">
            Preencha todos os campos!
            </div> 
            <?php

        }
    }
?>


</body>
</html>