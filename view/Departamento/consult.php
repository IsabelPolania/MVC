<table class="table table-hover table-striped mt-5">
 <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
 </thead>
    <tbody>
        <?php
        $i=0;
            foreach ($departamentos as $depto){
                $i++;
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$depto['nombre_dep']."</td>";                                      //asignar el valor del array asociativo a la variable, será mostrado en la URL 
                echo "<td><a href='".getUrl("Departamento", "Departamento", "getUpdate",array("id_dep"=>$depto['id_dep']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='".getUrl("Departamento", "Departamento", "getDelete",array("id_dep"=>$depto['id_dep']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
