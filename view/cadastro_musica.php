<?php include './style/template.php';
      include '../control/MusicasControl.php'; 
      $musicaControl = new MusicasControl();
?>
<?php 
    if(isset($_POST['salvar'])){
        $musicaControl->inserir();
        header('Location: index_musicas.php');
    }else{
        
    }
?>
<div class="col-sm-12 col-md-offset-4">
   
        <h2>CADASTRAR MUSICA</h2>
        <br><br>
        <div class="col-sm-3">
            <form method="POST">
                <label>Titulo da Música</label>
                <input required="true" class="form-control" name="titulo">
                <label>Compositores</label>
                <select class="form-control" name="autor_id">
                    <?php foreach ($musicaControl->listarMusicosControl() as $value){ ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->nome;?></option>
                    <?php } ?>
                    </select>
                <label>Midias</label>
                <select class="form-control" name="midia_id">
                        <option value="1">CD</option>
                        <option value="2">DVD</option>
                        <option value="3">Vinil</option>
                    </select>
                <br>
                <input class="form-control btn btn-success col-sm-2" type="submit" name="salvar" value="Confirmar">
            </form>
        </div>
</div>