<?php

if(isset($_POST['adicionar'])){
    require_once "class/Conexao.php";
    require_once "class/Tarefa.php";

    $tarefa = new Tarefa();

    $titulo = addslashes($_POST['titulo']);
    $dataBr = addslashes($_POST['dataBr']);
    $horario = addslashes($_POST['horario']);
    $descricao = addslashes($_POST['descricao']);
    $id = addslashes($_POST['usuario_idusuario']);

    if($tarefa->insertTask($titulo, $dataBr, $horario, $descricao, $id)){
        header("Location: view_home.php");
    }else{
        header("Location: view_home.php");
    }
}