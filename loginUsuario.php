<?php

if(isset($_POST['acessar'])){
    require_once "class/Conexao.php";
    require_once "class/Usuario.php";

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['logado'])){
            header("Location: view_home.php");
        }else{
            echo "Email ou senha incorreto";
        }
    }else{
        echo "Email ou senha incorreto";
    }
}