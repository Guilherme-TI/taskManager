<?php

if(isset($_GET['idtarefa'])){
    require_once "class/Conexao.php";
    require_once "class/Tarefa.php";

    $tarefa = new Tarefa();
    $id = $_GET['idtarefa'];

    if($tarefa->deleteTask($id)){
        header("Location: view_home.php");
    }else{
        header("Location: view_home.php");
    }
}