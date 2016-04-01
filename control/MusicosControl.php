<?php include '../model/Musico.php';

class MusicosControl {
    
    function listar(){
        $musicos = new Musico();
        return $musicos->listarMusicos();
    }
    
}
