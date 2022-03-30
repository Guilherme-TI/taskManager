<?php

class Tarefa{
    public function insertTask($titulo, $dataBr, $horario, $descricao, $id){
        $sql = "INSERT INTO tarefa (titulo, dataBr, horario, descricao, usuario_idusuario) VALUES(?,?,?,?,?)";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $titulo);
        $stm->bindValue(2, $dataBr);
        $stm->bindValue(3, $horario);
        $stm->bindValue(4, $descricao);
        $stm->bindValue(5, $id);
        $stm->execute();
    }

    public function listTask($id){
        $sql = "SELECT * FROM tarefa WHERE usuario_idusuario = ?";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $id);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function deleteTask($id){
        $sql = "DELETE FROM tarefa WHERE idtarefa = ?";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $id);
        $stm->execute();
    }
}
