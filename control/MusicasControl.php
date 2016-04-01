<?php

include '../model/Musica.php';


class MusicasControl {
    
    function listar(){
        $musicas = new Musica();
        return $musicas->listarMusicas();
    }
    
    function inserir(){
        if(isset($_POST['salvar'])){
          $musica = new Musica();  
          
          $titulo = $_POST['titulo'];
          $autor_id = $_POST['autor_id'];
          $midia_id = $_POST['midia_id'];
         
          $musica->setTitulo($titulo);
          $musica->setAutor_id($autor_id);
          $musica->setMidia_id($midia_id);
          $musica->salvar();
         
        }    
    }
    
    function listarMusicosControl(){
        $musicos = new Musica();
        return $musicos->listarCompositor();
    }
}
