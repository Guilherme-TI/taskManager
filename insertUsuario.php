<?php

if(isset($_POST['registrar'])){
    require_once "class/Conexao.php";
    require_once "class/Usuario.php";

    $u = new Usuario();

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->cadastro($nome, $email, $senha)){
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }
}