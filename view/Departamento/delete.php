<div class="jumbotron mt-4">
    <h3 clas="display-4">Eliminar Departamento</h3>
</div>
<?php
 foreach ($departamento as $depto){
 
?>
<form action="<?php echo getUrl("Departamento","Departamento","postdelete");?>" method="post">

    <div class="row">
        <div class="form-group col-md-4">
            <h5>¿Seguro que deseas eliminar el departamento <?php echo $depto['nombre_dep'];?> ?</h5>
            <input type="hidden" name="id_dep" value="<?php echo $depto['id_dep'];?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            <a href="<?php echo getUrl("Departamento", "Departamento", "consult"); ?>"><button type="button" class="btn btn-dark">volver</button></a>
        </div>
    </div>
</form>
<?php
 }
?>