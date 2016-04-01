<?php include '../conexao/Conexao.php';

class Musico {

    private $id;
    private $nome;
    private $endereco_id;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco_id() {
        return $this->endereco_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco_id($endereco_id) {
        $this->endereco_id = $endereco_id;
    }

    public function listarMusicos() {
    
        $sql = "SELECT * FROM musicos";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function salvar() {
       $sql = "INSERT INTO "
               . "musicos "
               . "(nome, endereco_id) "
               . "values "
               . "(:nome, :endereco_id)";
       $query = Conexao::prepare($sql);
       $query->bindValue(":nome", $this->getNome());
       $query->bindValue(":endereco_id", $this->getEndereco_id());
       $query->execute();
       
    }
}
