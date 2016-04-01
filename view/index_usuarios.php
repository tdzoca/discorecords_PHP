<?php include './style/template.php'; ?>
<?php include '../control/UsuariosControl.php'; 
 $usuariosControl = new UsuariosControl();
?>

<div class="col-sm-10 col-sm-offset-1">
    <h3>Músicas</h3>
    <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Autor_id</td>
        </tr>    
        <?php foreach ($usuariosControl->listar() as $value){ ?>
               <tr>
                 <td>1</td>
                 <td><?php echo $value->email; ?></td>
                 <td><?php echo $value->senha; ?></td>
             </tr> 
            <?php } ?>
             
   </table>
</div>