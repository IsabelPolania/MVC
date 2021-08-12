<?php

    session_start();
  //Helpers nos contendrá todas las ayudas, todo lo estructural,
  // todas las funciones que vamos a necesitar 
  // y que mas adelante recurriremos a ellas 
  //funcion que me redirecciona, se le envía una dirección (URL) y ella se encarga de llevarme a allá
  
  function redirect ($url){ 
    echo "<script type='text/javascript'>" 
    ."window.location.href='$url'" //función que permite redirecciona url con javascript
    ."</script>";
}
//(imprimir la información) 
//función que me valida si están llegando los datos, 
//en la variable var se le envía los valores, su uso es frecuente en los datos del form
function dd($var){
    echo "<pre>";
    die (print_r($var)); //matamos la ejecución y print será la funcion que me imprimirá los datos en un array
}
//función que devueve la url, a dicha función se le pasan 3 datos: modulo, controlador y funcion
function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){
    if ($pagina==false){
        $pagina="index";
    }

    //modulo es la carpeta que está dentro del controlador 
    //controlador es el archivo que está dentro de la carpeta del modulo 
    //funcion = metodo dentro del archivo controlador 

    //nota: por medio de la URL ingresaremos a la carpeta=modulo, al archivo=controlador y a la función=metodo, así ingresaremos a absolutamente toda la información y trabajaré el proyecto
    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion"; //parametros que le estoy enviando a la funcioncion getUrl
               
    //modulo es el parametro y es igual a lo que llega por la variable modulo (argumento), asi con cada uno (controlador,funcion)
    if ($parametros!=false){
        foreach ($parametros as $key =>$valor){
            $url.="&$key=$valor";
        }
    }
    return $url;

}
//función que me VALIDA la información que le pasé por medio de la URL
function resolve(){
  
    $modulo=ucwords($_GET['modulo']);//ucwords toma una palabra, toma la primera letra y me la convierte en mayus, en el get recibo lo que me está enviando por modulo
    $controlador=ucwords($_GET['controlador']);
    $funcion=$_GET['funcion']; //las funciones empiezan por minusculas, por eso no es necesario usar el ucwords  

//is_dir es la función que me verifica si la carpeta modulo existe
//toda direccion ya será desde index, salgo de la carpeta web, entro a la carpeta controler y valido si existe carpeta modulo 
    if (is_dir("../controller/$modulo")) {

        if (file_exists("../controller/$modulo/".$controlador."Controller.php")) { //validamos la existencia del archivo, salimos de index(web),ingresamos a directorio controller, ingresamos a modulo,concateno el dato que me llega por controlador, el archivo no me va a llegar con su nombre completo, por eso me toca anexarle controller.php
        include_once "../controller/$modulo/".$controlador."Controller.php"; //una vez estemos dentro del archivo, lo incluimos
        $nombreClase=$controlador."Controller"; //El controlador ya se trabaja por clases, por ejemplo si trabajo con el controlador departamento, la clase de ese departamento es DepartamentoController
        $objClase=new $nombreClase(); //creamos el objeto de la clase con el nombre de la clase a la que pertenece
        if (method_exists($objClase,$funcion)){ //funcion que valida si el metodo existe,nos pide dos parametros : objeto de la clase (para acceder a la clase) y la funcion
            $objClase->$funcion(); //trabajar por medio del objeto de la clase y llamar la función a necesitar

        }else {
            echo "El metodo especificado no existe";
        }

    }else {
        echo "El controlador especificado no existe";
    }

    }else {
        echo "El modulo especificado no existe";
    }
}

?>
