<div class="jumbotron mt-4">
    <h3 clas="display-4">Eliminar Ciudad</h3>
</div>
<?php
 foreach ($ciudad as $ciu){
 
?>
<form action="<?php echo getUrl("Ciudad","Ciudad","postdelete");?>" method="post">

    <div class="row">
        <div class="form-group col-md-4">
            <h5>¿Seguro que deseas eliminar la ciudad <?php echo $ciu['nombre_ciu'];?> ?</h5>
            <input type="hidden" name="id_ciudad" value="<?php echo $ciu['id_ciudad'];?>">
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