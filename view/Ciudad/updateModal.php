<?php
 foreach ($ciudad as $ciu){
?>
<div class="modal-body">
    <form action="<?php echo getUrl("Ciudad","Ciudad","postUpdate");?>" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="form-group col-md-12">
                <label>Nombre</label>
                <input type="hidden" name="id_ciudad" value="<?php echo $ciu['id_ciudad'];?>">
                <input type="text" name="nombre_ciu" class="form-control" value="<?php echo $ciu['nombre_ciu'];?>">
        </div>
        <div class="col-md-12 form-group">
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
        <div class="col-md-12 form-group">
            <label>Imagen</label>
            <div id="cambiarImagen">
                <img class="d-block" id="imagen" src="<?php echo $ciu['ciu_imagen'] ?>" width="150px">
                <button type="button" id="cambioImagen" class="btn btn-primary mt-3">Cambiar Imagen</button>
            </div>
        </div>
</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
    </form>
<?php
 }
?>