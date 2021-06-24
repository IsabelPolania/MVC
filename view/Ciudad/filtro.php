<?php
       
    foreach ($ciudades as $ciu){
               
        echo "<tr>";
        echo "<td>".$ciu['id_ciudad']."</td>";
        echo "<td>".$ciu['nombre_ciu']."</td>"; 
        echo "<td>".$ciu['nombre_dep']."</td>"; 
        echo "<td><img src='".$ciu['ciu_imagen']."' width='100px'></td>";            //asignar el valor del array asociativo a la variable, será mostrado en la URL 
        echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getUpdate",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-primary'>Editar</button></a></td>";
        echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getDelete",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-danger'>Eliminar</button></td>";
        echo "</tr>";
    }
?>