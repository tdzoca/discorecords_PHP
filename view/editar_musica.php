<?php include './style/template.php';
      include '../control/MusicasControl.php'; 
      $musicaControl = new MusicasControl();
      $id = $_GET['id'];
      $musica = $musicaControl->findControl($id);
      
?>
<?php 
    if(isset($_POST['salvar'])){
        $musicaControl->updateControl();
        header('Location: index_musicas.php');
    }else{
        
    }
?>
<div class="col-sm-12 col-md-offset-4">
    <h2>&nbsp&nbsp&nbsp&nbsp;EDITAR MÚSICA (<?php echo  $musica->titulo;  ?>)</h2>
        <br><br>
        <div class="col-sm-3">
            <form method="POST">
                <input value="<?php echo $musica->id; ?>" type="hidden" name="id" >
                <label>Titulo da Música</label>
                <input required="true" class="form-control" name="titulo" value="<?php echo $musica->titulo; ?>">
                <label>Compositores</label>
                <select class="form-control" name="autor_id">
                    <option value="<?php echo $musica->autor_id; ?>"><?php echo $musica->nome;?></option>
                    <?php foreach ($musicaControl->listarMusicosControl() as $value){ ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->nome;?></option>
                    <?php } ?>
                    </select>
                <label>Midias</label>
                <select class="form-control" name="midia_id">
                        <option value="<?php echo $musica->midia_id; ?>"></option>
                        <option value="1">CD</option>
                        <option value="2">DVD</option>
                        <option value="3">Vinil</option>
                    </select>
                <br>
                <input type="submit" class="form-control btn btn-success col-sm-2" name="salvar" value="Confirmar">
            </form>
        </div>
</div>