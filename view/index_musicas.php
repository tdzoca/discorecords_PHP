<?php include './style/template.php'; ?>
<?php include '../control/MusicasControl.php'; 
 $musicasControl = new MusicasControl();
?>
<div class="col-sm-offset-10 btn btn-success"><a href="cadastro_musica.php">adicionar</a></div>
<div class="col-sm-10 col-sm-offset-1">
    <h3>Músicas</h3>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>ID AUTOR</td>
            <td>AÇÕES</td>
        </tr>    
        <?php foreach ($musicasControl->listar() as $value){ ?>
               <tr>
                 <td>1</td>
                 <td><?php echo $value->titulo; ?></td>
                 <td><?php echo $value->nome; ?></td>
                 <td><a class="btn btn-warning" href="http://localhost/discorecords_PHP/view/editar_musica.php">editar</a>
                     <a class="btn btn-danger" href="http://localhost/discorecords_PHP/view/index_musicas.php">deletar</a></td>
             </tr> 
            <?php } ?>
   </table>
</div>