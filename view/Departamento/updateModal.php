<?php
 foreach ($departamento as $depto){
 
?>
<form action="<?php echo getUrl("Departamento","Departamento","postUpdate");?>" method="post">
<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Nombre</label>
            <input type="hidden" name="id_dep" value="<?php echo $depto['id_dep'];?>">
            <input type="text" name="nombre_dep" class="form-control" value="<?php echo $depto['nombre_dep'];?>">
            
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Editar</button>
</div>
</form>
<?php
 }
?>