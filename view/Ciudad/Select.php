<div class="jumbotron mt-4">
    <h3 clas="display-4">Registrar Ciudad</h3>
</div>
<form action="<?php //echo getUrl("Ciudad","Ciudad","postInsert");?>" method="POST" enctype="multipart/form-data"> 
   <div class="row">
        <div class="col-md-4 form-group">
            <label>Departamento</label>
                <select name="dep_id" class="form-control" id="dep_id" data-url="<?php echo getUrl("Ciudad","Ciudad","selectDinamico",false,"ajax") ?>">
                    <option value="">Selecione...</option>
                    <?php
                        foreach($departamento as $depto){
                            echo "<option value='".$depto['id_dep']."'>".$depto['nombre_dep']."</option>";
                        }
                    ?>
                </select>
            </div>
        <div class="col-md-4 form-group">
          <label>Ciudad</label>
          <select name="id_ciu" id="id_ciu" class="form-control"><option value="">Seleccione ... </option></select>
        </div>
    </div>
    <div class="row">
       <div class="col-md-4">
           <input type="submit" value="Enviar" class="btn btn-success">
           <a href="<?php echo getUrl ("Ciudad", "Ciudad", "consult");?>"><button type="button" class="btn btn-primary">Volver</button></a>
                
         </div>
        </div>
    <!-- <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
            <a href=" //echo getUrl("Ciudad", "Ciudad", "consult"); ?>"><button type="button" class="btn btn-dark">volver</button></a>
        </div>
    </div> -->
</form>