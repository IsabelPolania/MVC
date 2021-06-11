<?php
  //En esta hoja TODO el código está estatico, hasta que sea llamada la clase 
class Connection{

     private $server; //variables de la clase Connection || atributos 
     private $user;
     private $pass;
     private $port;
     private $database;
     private $link;
       
     //las funciones son los métodos de la clase Connection

        function __construct(){ //Da inicio a la clase Connection(es como el motor de un auto)||realiza las tareas de inicialización de los objetos al ser instanciados.
        
         $this->setConnect(); //set es la funcion que se encarga de pasar las variables de la hoja conf a las mismas en esta pagina (server, user, ...)
         $this->connect(); // función que me conecta a la BBDD
        }

    private function setConnect(){ //esta FUNCION es privada porque solo la clase Connection tendrá acceso a ella

        require_once 'conf.php'; //funcion que necesita informacion de las variables para poder seguir ejecutandose, si no halla info, se detiene. 
        $this->server=$server; //el primer server hace referencia a la variable de la linea 6 (arriba) es la que está en la clase Connection, la variable server con $ significa que es la variable de la hoja conf 
        $this->user=$user; //TODO este PROCESO es asignación a cada una de las variables que me están llegando desde la hoja conf 
        $this->pass=$pass;
        $this->port=$port;
        $this->database=$database;
    }

    private function connect (){ //esta función tambien es privada 
       
        //Estos son los parametros que debo pasarle a la funcion mysqli EN ESE ORDEN 
        //1. server 
        //2. user 
        //3. pass
        //4. database 
       

         // mysqli_connect es la funcion que me permite conectarme con la BBDD y la variable LINK es la que me guarda la conexión
        $this->link=mysqli_connect ($this->server,$this->user,$this->pass,$this->database); //Ella me solicita unos parametros para conectarme, son los que están en parentesis 

        if (!$this->link){ //Si no existe la conexión a la BB
            die (mysqli_error($this->link)); //die mata el proceso PERO me muestra EL ERRROR por el cual no me pude conectar a la BBDD 
        }else{
        //echo "¡Conexión exitosa!";
        }
    }
    public function getConnect(){ // el metodo get retorna la conexión 

      return $this->link;
    }
 
 public function close (){ // close es el metodo que acaba la conexión con MYSQL 

    mysqli_close($this->link); 
 }

}
