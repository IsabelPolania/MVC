<?php
    include_once '../lib/conf/Connection.php';

    //la clase Master hereda metodos publicos de la clase Connection
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
    }

?>