//se sitúa sobre el documento, lo prepara para una ejecución
// (estudia todos los cambios que se hacen para tener en cuanta lo que se hará)
$(document).ready(function(){

    //cuando estamos sobre el documento (on) debemos indicarle sobre quién nos vamos a parar, son tres palabras
    //1. EVENTO   || es una acción,algo que pasa dentro de una página web,
    // el evento keyup lo que hace es que cuando suelto la tecla sucede algo 

    //2.SELECTOR  || identificador (ID), clase, etc. El ID se identifica con #  

    //3. FUNCIÓN la cual es la que vamos a desarrollar 

    $(document).on("keyup","#filtro", function(){

       

        
         //la variable buscar me va a guardar el valor del elemento FILTRO, es decir, lo que escribo en la casilla  
         //(el valor del INPUT de la hoja consulta VIEW linea 51)
         // this =captura 
         //val = valor del campo en ese momento

        var buscar=$(this).val();

        

      //AJAX es una librería que me permite trabajar de forma asíncrona, es una conexión, intermediario entre la vista
      //y el controlador
      //Lo que hacemos aquí es llamar a ajax tal como se muestra abajo.


      //AJAX me pedirá 3 parametros 
      //1. URL || Hacia donde vamos a llevar la información que me recoge en la línea 20 de esta hoja
      //2.DATA || A través de la propiedad data se envían unos datos 
      //3. TYPE || Tipo de envío o METODO por el cual enviaremos la información 

        $.ajax({

            url:"../../controller/ciudad/filtro.php", //no se usa ; porque no queremos terminar la ejecución, por eso la coma 
            data:"buscar="+buscar, //al buscar se le concatena (con signo más) el buscar (la variable que me guarda el valor del formulario)
            type:"GET", 


        //cuando termine la ejecución se ejecutará la función y para hacerlo se necesita unos datos
        //los datos me los va a brindar el archivo FILTRO ubicado en la carpeta controller/ciudad/filtro, linea 34
        //y en la hoja llamada FILTRO, está el foreach, ese foreach es quien me dará los datos que coincidan con la consulta 
        //de la hoja filtro 


            success: function(datos){ 
                $("tbody").html(datos); //se le indica que busque la etiqueta tbody y la reemplaza lo que tiene por los datos que me están llegando (los datos que tengo son los del foreach de la hoja filtro)
            }
        });
    });

});

$(document).ready(function(){

    $(document).on("keyup","#buscar", function(){

       var buscar=$(this).val();

        $.ajax({

            url:"../../controller/departamento/filtro.php", 
            data:"depto="+buscar, 
            type:"GET", 


           success: function(datos){ 
                $("tbody").html(datos); 
            }
        });
    });

});