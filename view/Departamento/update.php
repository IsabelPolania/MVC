<div class="jumbotron mt-4">
    <h3 clas="display-4">Editar Departamento</h3>
</div>
<?php
 foreach ($departamento as $depto){
 
?>
<form action="<?php echo getUrl("Departamento","Departamento","postUpdate");?>" method="post">

    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="id_dep" value="<?php echo $depto['id_dep'];?>">
            <input type="text" name="nombre_dep" class="form-control" value="<?php echo $depto['nombre_dep'];?>">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
            <a href="<?php echo getUrl("Departamento", "Departamento", "consult"); ?>"><button type="button" class="btn btn-dark">volver</button></a>
        </div>
    </div>
</form>
<?php
 }
?>