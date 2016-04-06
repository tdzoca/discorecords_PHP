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
                 <td><?php echo $value->id; ?></td>
                 <td><?php echo $value->titulo; ?></td>
                 <td><?php echo $value->nome; ?></td>
                 <td><?php echo "<a href='editar_musica.php?acao=atualizar&id=".$value->id."'>editar</a>" ?>
                     <?php echo "<a class='btn btn-danger' href='index_musicas.php'>deletar</a></td>"?>
             </tr> 
            <?php } ?>
   </table>
</div>