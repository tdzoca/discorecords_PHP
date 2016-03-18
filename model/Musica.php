<?php

class musicas {
    private $id;
    private $nome;
    private $autor_id;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getAutor_id() {
        return $this->autor_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAutor_id($autor_id) {
        $this->autor_id = $autor_id;
    }

    
}
