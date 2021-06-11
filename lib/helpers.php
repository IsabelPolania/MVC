<?php

 //funcion que me redirecciona, ya no es header
function redirect ($url){ 
echo "<script type='text/javascript'>"
    ."window.location.href='$url'"
    ."</script>";
}
//función que me valida si están llegando los datos
function dd($var){
    echo "<pre>";
    die (print_r($var)); //print funcion que me imprime un array
}
//función que devueve la url
function getUrl($modulo,$controlador,$funcion){
    //modulo es la carpeta que está dentro del controlador 
    //controlador es el archivo que está dentro de la carpeta del modulo 
    //funcion = metodo dentro del archivo controlador 

    $url="index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion"; //parametros que le estoy enviando a la funcioncion getUrl
    
    return $url;
}
//función que me VALIDA la información que le pase por medio de la URL
function resolve(){
  
    $modulo=ucwords($_GET['modulo']);//toma una palabra, toma la primera letra y me la convierte en mayus
    $controlador=ucwords($_GET['controlador']);
    $funcion=$_GET['funcion'];

//is_dir es la función que me verifica si la carpeta modulo existe 
    if (is_dir("../controller/$modulo")) {

        //if (file_exists("../controller/$modulo/".$controlador."Controller.php")) { //el archivo no me va a llegar completo, por eso me toca anexarle controller.php
            if (file_exists("../controller/$modulo")){
        include_once "../controller/$modulo/".$controlador."Controller.php";
        $nombreClase=$controlador."Controller";
        $objClase=new $nombreClase();
        if (method_exists($objClase,$funcion)){ //funcion que nos pide dos parametros : objeto de la clase y la funcion
            $objClase->$funcion();

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
