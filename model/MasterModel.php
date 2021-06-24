<?php
//El modelo obtiene datos, para obtenerlos debemos acceder por medio de la conexión directa a la BBDD
    include_once '../lib/conf/Connection.php';

    //la clase Master hereda metodos publicos y protegidos de la clase Connection
    class MasterModel extends Connection{
    
        public function insert($sql){ //me pide un parametro
          $result=mysqli_query ($this->getConnect(),$sql);
          return $result;
        }
        public function consult($sql){
            $result=mysqli_query ($this->getConnect(),$sql);
            return $result;
        }
        public function update($sql){ 
            $result=mysqli_query ($this->getConnect(),$sql);
            return $result;
        }
        public function delete($sql){ 
            $result=mysqli_query ($this->getConnect(),$sql);
            return $result;
        }
        public function autoincrement($table,$field){
           $sql="SELECT MAX($field) FROM $table";
           $result=$this->consult($sql);
           $count=mysqli_fetch_row($result);

           return $count[0]+1;
        }
    }

?>