<div class="jumbotron mt-4">
    <h3 clas="display-4">Editar Ciudad</h3>
</div>
<?php
 foreach ($ciudad as $ciu){
 
?>
<form action="<?php echo getUrl("Ciudad","Ciudad","postUpdate");?>" method="post">

    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="id_ciudad" value="<?php echo $ciu['id_ciudad'];?>">
            <input type="text" name="nombre_ciu" class="form-control" value="<?php echo $ciu['nombre_ciu'];?>">
       </div>
       <div class="col-md-4">
                <label>Departamento <label>
                <select name="id_dep" class="form-control">
                    <option value="">Selecione...</option>
                    <?php
                    foreach($departamento as $depto){
                       if ($depto['id_dep']==$ciu['id_dep']){

                        echo "<option value='".$depto['id_dep']."' selected>".$depto['nombre_dep']."</option>";

                       }else {

                        echo "<option value='".$depto['id_dep']."'>".$depto['nombre_dep']."</option>";

                       }
                    }
            
                    ?>
                </select>
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