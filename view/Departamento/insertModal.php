<form action="<?php echo getUrl("Departamento","Departamento","postInsert");?>" method="post">
<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Nombre</label>
            <input type="text" name="nombre_dep" class="form-control" placeholder="Nombre Departamento">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
</form>