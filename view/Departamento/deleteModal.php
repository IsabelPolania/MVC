<?php
 foreach ($departamento as $depto){
 
?>
<div class="modal-body">
    <form action="<?php echo getUrl("Departamento","Departamento","postdelete");?>" method="post">

        <div class="row">
            <div class="form-group col-md-12">
                <h5>¿Seguro que deseas eliminar el departamento <?php echo $depto['nombre_dep'];?> ?</h5>
                <input type="hidden" name="id_dep" value="<?php echo $depto['id_dep'];?>">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
</div>
</form>
<?php
 }
?>
