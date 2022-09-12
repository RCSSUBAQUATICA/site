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
    <title>Login</title>
</head>
<body>

    <img id="logo" src="imagens/logorcs.png" alt="">
<div id=corpo-form>
    <h1>Portal do Colaborador</h1>
    <form method="POST" action="acessar.php" >
        <input type="email" placeholder="Email" name= "email">
        <input type="password" placeholder="Senha" name= "senha">
        <input type="submit" value="Entrar">
        <a href="cadastrar.html">Ainda não tem acesso? <strong>Cadastre-se!</strong></a>
        </form>    
        <form action="areaMaster.php">
<input type="submit" value="Master">
    </div>

<?php
if(isset($_POST['email']))
{
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        
        if(!empty($email) && !empty($senha))
        {
            $u->conectar("projeto_login","localhost", "root","");
            if($u->msgError == "")
            {                
            if($u->logar($email,$senha))
            { 
                header("location: areaColaborador.php");
            }
            else{
                echo "Email e/ou senha incorreto!";
            }
        }
        else{
            echo "Erro: ".$u->msgError;
        }

        }
        else{
            echo "Preencha todos os campos!";
        }
    }
?>


</body>



</html>