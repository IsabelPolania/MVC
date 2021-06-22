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
                echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getUpdate",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='".getUrl("Ciudad", "Ciudad", "getDelete",array("id_ciudad"=>$ciu['id_ciudad']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>