//se sitúa sobre el documento, lo prepara para una ejecución
// (estudia todos los cambios que se hacen para tener en cuanta lo que se hará)
$(document).ready(function(){

        $(document).on("click", "#cambioImagen", function(){
            var ruta=$("#imagen").attr("src"); //funcion que cambio el valor a un atributo

         $("#cambiarImagen").html("<input type='file' name='ciu_imagen'>");
         $("#cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
        }); 

       $(document).on("keyup", "#filtro", function(){
                var buscar=$(this).val();
                var url=$(this).attr("data-url"); //attr busca el atributo que está llegando

                $.ajax({
                        url:url,
                        data:"buscar="+buscar,
                        type:"POST",
                        success:function(datos){
                          $("tbody").html(datos);
                        }
                });     
        });
        $(document).on("click", "#modal", function(){
                var url=$(this).attr("data-url");

                $.ajax({
                        url:url,
                        success:function(datos){
                          $("#contenedor").html(datos);
                          $("#exampleModal").modal("show");
                        }
                });
        });

        $(document).on("change", "#dep_id", function(){
            var id=$(this).val();
            var url=$(this).attr("data-url");

            $.ajax({

                        url:url,
                        data:"dep_id="+id,
                        type:"POST",
                        success:function (datos){
                        $("#ciu_id").html(datos);
                        }
                })

        });
        $("#alerta").delay(4000).fadeOut();
});
