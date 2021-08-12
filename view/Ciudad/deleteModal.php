<?php
 foreach ($ciudad as $ciu){
 
?>
<form action="<?php echo getUrl("Ciudad","Ciudad","postdelete") ?>" method="post" enctype="multipart/form-data"> 
<div class="modal-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Ciudad</label>
                <input type="text" readonly name="nombre_ciu" class="form-control" value="<?php echo $ciu['nombre_ciu']; ?>">
                <input type="hidden" name="id_ciudad" value="<?php echo $ciu['id_ciudad'] ?>">
            </div>
            <div class="col-md-6 form-group">
                <label>Departamento</label>
                <input type="text" readonly name="nombre_dep" class="form-control" value="<?php echo $ciu['nombre_dep'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Imagen</label>
                <div id="cambiarImagen">
                    <img class="d-block" id="imagen" src="<?php echo $ciu['ciu_imagen'] ?>" width="150px">
                    <input type="hidden" readonly name="ciu_imagen" class="form-control" value="<?php echo $ciu['ciu_imagen'] ?>">
                </div>
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