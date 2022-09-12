<?php

class Usuarios
{
    private $pdo;
    public $msgError ="";

    public function conectar($nome,$host,$usuario,$senha)
    {
        global $pdo;
        global $msgError;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
    }

    public function cadastra($nome, $matricula, $email, $senha) 
    {
        global $pdo;
        //Verificar se ja tem cadastro.
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        //Caso não, cadastrar.
        }else{
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, matricula, email, senha) VALUES (:n, :m, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":m", $matricula);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        //Verificar se tem cadastro
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0){
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        return true;
        }else{
            return false;
            
        }

}   

}








?>