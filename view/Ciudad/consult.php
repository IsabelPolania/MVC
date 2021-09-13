<div class="row mt-4">
    <div class="col-md-3">                                                 
        <input type="text" name="filtro" id="filtro" class="form-control" data-url="<?php echo getUrl("Ciudad","Ciudad","filtro",false,"ajax") ?>">
    </div>
    <div class="col-md-3">
        <button type="button" id="modal" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Ciudad","Ciudad","getInsertModal", false, "ajax") ?>">
        Registrar
        </button>
    </div>
    <div class="col-md-2">
        <a target="_blank" href="<?php echo getUrl ("Ciudad","Ciudad","correo",false,"Ajax")?>">
        <button type="button" class="btn btn-primary">
           Correo
        </button>
        </a>
    </div>
</div>
<?php 
   if (isset($_SESSION['mensaje'])) {
?>
  <div class="alert alert-success alert-dismissible fade show mt-4" id="alerta" role="alert">
        <?=$_SESSION['mensaje'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
<?php
    unset($_SESSION['mensaje']);
    }
?>
<?php 
   if (isset($_SESSION['mensajes'])) {
?>
  <div class="alert alert-info alert-dismissible fade show mt-4" id="alerta" role="alert">
        <?=$_SESSION['mensajes'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
<?php
    unset($_SESSION['mensajes']);
    }
?>
<?php 
   if (isset($_SESSION['mensaj'])) {
?>
  <div class="alert alert-danger alert-dismissible fade show mt-4" id="alerta" role="alert">
        <?=$_SESSION['mensaj'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
<?php
    unset($_SESSION['mensaj']);
    }
?>

<table class="table table-hover table-striped mt-5">
 <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
 </thead>
    <tbody>
        <?php
        $i=0;
            foreach ($ciudad as $ciu){
                $i++;
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$ciu['nombre_ciu']."</td>"; 
                echo "<td>".$ciu['nombre_dep']."</td>"; 
                echo "<td><img src='".$ciu['ciu_imagen']."' width='100px'></td>";            //asignar el valor del array asociativo a la variable, será mostrado en la URL 
              //echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getInsertModal",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><button type='button' id='modal' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Ciudad","Ciudad","getupdateModal", array("id_ciudad"=>$ciu['id_ciudad']), "ajax")."'>Editar</button></td>";
                echo "<td><button type='button' id='modal' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Ciudad","Ciudad","getdeleteModal", array("id_ciudad"=>$ciu['id_ciudad']), "ajax")."'>Eliminar</button></td>";
                //echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getDelete",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
        ?>
    </div>
    
    </tbody>
   
</table>