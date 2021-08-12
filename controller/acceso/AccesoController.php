<?php

 include_once '../model/acceso/AccesoModel.php';

  class AccesoController{

        public function login(){

            $usuario=$_POST['usuario'];
            $pass=$_POST['clave'];

            $obj= new AccesoModel();

            $sql="SELECT usu_id, usu_nombre, usu_apellido FROM usuario WHERE usu_clave='$pass' AND (usu_correo='$usuario' OR usu_nickname='$usuario')";


            $user=$obj->consult($sql);

            if (mysqli_num_rows($user)>0) {
                foreach ($user as $usu) {
                    //las variables de sesión aquí son id,nombre,apellido
                    $_SESSION['id']=$usu['usu_id']; //El primer corchete es el nombre de la variable de la sesion por lo tanto se puede llamar como quiero, el segundo corchete debe ser el mismo nombre de la BBDD 
                    $_SESSION['nombre']=$usu['usu_nombre'];
                    $_SESSION['apellido']=$usu['usu_apellido'];
                    $_SESSION['auth']="ok";
                }
                redirect ("index.php");
            }else{
                $_SESSION['mensaje']="El correo/Nickname y/o contraseña son incorrectos";
                redirect ("login.php");
            }
        }
    
        public function logout(){
          
            /* unset($_SESSION['nombre']);
            unset($_SESSION['apellido']);
            unset($_SESSION['id']); */
            session_destroy();
            redirect ("login.php");

        }
    }
?>