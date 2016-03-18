<?php

include '../model/musicas.php';


class MusicasControl {
    
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
    }
}
