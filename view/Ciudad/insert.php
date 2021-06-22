<div class="jumbotron mt-4">
    <h3 clas="display-4">Registrar Ciudad</h3>
</div>
<form action="<?php echo getUrl("Ciudad","Ciudad","postInsert");?>" method="post">
   <div class="row">
        <div class="col-md-4 form-group">
            <label>Nombre</label>
            <input type="text" name="nombre_ciu" class="form-control" placeholder="Nombre Ciudad">
       </div>
   
    <div class="form-group col-md-4">
                <label>Departamento </label>
                <select name="id_dep" class="form-control">
                    <option value="">Selecione...</option>
                    <?php
                    foreach($departamento as $depto){
                        echo "<option value='".$depto['id_dep']."'>".$depto['nombre_dep']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label>Imagen</label>
                <input type="file" name="ciu_imagen">
            </div>
        </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
            <a href="<?php echo getUrl("Ciudad", "Ciudad", "consult"); ?>"><button type="button" class="btn btn-dark">volver</button></a>
        </div>
    </div>
</form>