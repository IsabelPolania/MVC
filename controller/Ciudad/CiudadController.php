<?php

include_once '../model/Ciudad/CiudadModel.php';
Class CiudadController{

    public function getInsert(){
       
        $obj= new CiudadModel();
        $sql="SELECT id_dep, nombre_dep FROM departamento";
        $departamento=$obj->consult($sql);

        include_once '../view/ciudad/insert.php';
    }
 
    public function postInsert(){
        $obj=new CiudadModel();
        
        $nombre_ciu=$_POST['nombre_ciu'];
        $id_dep=$_POST['id_dep'];

        $sql="INSERT INTO ciudad VALUES(null,'$nombre_ciu', $id_dep,null)";

        $ejecutar=$obj->insert($sql);

        if ($ejecutar){
            redirect(getUrl("Ciudad","Ciudad","getInsert"));
        }else{
           echo "Ops, ha ocurrido un error";
        }
    }
    public function consult(){
        $obj= new CiudadModel();

        $sql="SELECT c.id_ciudad, c.nombre_ciu, d.nombre_dep, d.id_dep FROM ciudad c, departamento d WHERE c.id_dep=d.id_dep";
         $ciudad=$obj->consult($sql);
         
        include_once '../view/ciudad/consult.php';
    }
    public function getUpdate(){

        $obj=new CiudadModel();
        $id_ciu=$_GET['id_ciudad']; //OJITO A ESTO 
        $sql="SELECT * FROM ciudad WHERE id_ciudad=$id_ciu";
        $ciudad=$obj->consult($sql);
        $sql="SELECT * FROM departamento";
        $departamento=$obj->consult($sql);
        include_once '../view/ciudad/update.php';
    }
    public function postUpdate(){
        $obj=new CiudadModel();

        $id_dep=$_POST['id_dep'];
        $id_ciu=$_POST['id_ciudad'];
        $nombre_ciu=$_POST['nombre_ciu'];
    
        $sql="UPDATE ciudad SET nombre_ciu='$nombre_ciu', id_dep=$id_dep WHERE id_ciudad=$id_ciu";
        $ejecutar=$obj->update($sql);
        
        if ($ejecutar) {
            redirect (getUrl("Ciudad", "Ciudad", "consult"));
        }else {
           echo "Ops, ha ocurrido un error";
        }
    }
    public function getDelete(){
        $obj=new CiudadModel();

        $id_ciu=$_GET['id_ciudad'];

        $sql="SELECT * FROM ciudad WHERE id_ciudad=$id_ciu";

       $ciudad=$obj->consult($sql);

        include_once '../view/ciudad/delete.php';
    }
    public function postDelete(){

        $obj=new CiudadModel();

        $id_ciu=$_POST['id_ciudad'];

        $sql="DELETE FROM ciudad WHERE id_ciudad=$id_ciu";

        $ejecutar=$obj->delete($sql);
        
        if ($ejecutar) {
            redirect (getUrl("Ciudad", "Ciudad", "consult"));
        }else {
           echo "Ops, ha ocurrido un error";
        }
    }
}

?>