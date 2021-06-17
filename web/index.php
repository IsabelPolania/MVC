<?php

    include_once '../lib/helpers.php';

    include_once '../view/partials/head.php';

  echo "<body>";
       echo "<div class='container'>";
            include_once '../view/partials/navbar.php';

            if (isset($_GET['modulo'])) { //si existe algo que llegue por metodo get en el parametro modulo,
                resolve(); //llamamos al metodo resolve 
            }else{
                include_once '../view/partials/carrusel.php';// si no existe, carga el carrusel
            }
    echo "</div>";
    include_once '../view/partials/footer.php'; //en el footer está la funcionalidad del navbar (consulta,insertar...) y está los diseños 
?>