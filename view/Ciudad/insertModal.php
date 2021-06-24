<form action="<?php echo getUrl ("Ciudad", "Ciudad", "postInsert") ?>" method="post" enctype="multipart/form-data">
<div class="modal-body">
    <div class="col-md-12 form-group">
        <label>Nombre</label>
        <input type="text" name="nombre_ciu" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col-md-12 form-group">
        <label>Departamento</label>
        <select name="id_dep" class="form-control">
            <option value="">Selecione...</option>
            <?php
                foreach ($departamentos as $depto){
                    echo "<option value='".$depto['id_dep']."'>".$depto['nombre_dep']."</option>";
                }
            ?>
        </select>
   </div>
   <div class="col-md-12 form-group">
        <label class="d-block">Imagen</label>
        <input type="file" name="ciu_imagen">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>