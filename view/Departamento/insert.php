<div class="jumbotron mt-4">
    <h3 clas="display-4">Registrar Departamento</h3>
</div>
<form action="<?php echo getUrl("Departamento","Departamento","postInsert");?>" method="post">

    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="text" name="nombre_dep" class="form-control" placeholder="Nombre Departamento">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>