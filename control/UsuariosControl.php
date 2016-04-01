<?php

include '../model/Usuario.php';


class UsuariosControl {
    
    function listar(){
        $musicas = new Usuario();
        return $musicas->listarUsuarios();
    }
}
