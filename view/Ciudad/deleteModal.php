
<?php
 foreach ($ciudad as $ciu){
 
?>
<div class="modal-body">
    <form action="<?php echo getUrl("Ciudad","Ciudad","postdelete");?>" method="post">

        <div class="row">
            <div class="form-group col-md-12">
                <h5>¿Seguro que deseas eliminar la ciudad <?php echo $ciu['nombre_ciu'];?> ?</h5>
                <input type="hidden" name="id_ciudad" value="<?php echo $ciu['id_ciudad'];?>">
            </div>
        </div>
        
    </form>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
    </div>
<?php
 }
?>