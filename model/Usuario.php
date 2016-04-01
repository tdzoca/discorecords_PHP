<?php
include '../conexao/Conexao.php';

class Usuario {
    public $email;
    public $senha;
    
    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    public function listarUsuarios() {
    
        $sql = "SELECT * FROM usuarios";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
