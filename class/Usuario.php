<?php

class Usuario{
    public function cadastro($nome, $email, $senha){
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?)";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $nome);
        $stm->bindValue(2, $email);
        $senha = md5($senha);
        $stm->bindValue(3, $senha);
        $stm->execute();
    }
    public function login($email, $senha){
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = md5(?)";
        $stm = Conexao::conectar()->prepare($sql);
        $stm->bindValue(1, $email);
        $stm->bindValue(2, $senha);
        $stm->execute();

        if($stm->rowCount() > 0){
            $dados = $stm->fetch();
            $_SESSION['logado'] = $dados['idusuario'];
            $_SESSION['nome'] = $dados['nome'];
            return true;
        }else{
            return false;
        }
    }
}
