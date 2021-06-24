<?php

include_once '../model/Ciudad/CiudadModel.php';
Class CiudadController{

    public function getInsert(){
       
        $obj= new CiudadModel();
        $sql="SELECT * FROM departamento";
        $departamento=$obj->consult($sql);

        include_once '../view/ciudad/insert.php';
    }
 
    public function postInsert(){

        $obj=new CiudadModel();
        $nombre_ciu=$_POST['nombre_ciu'];
        $id_dep=$_POST['id_dep'];

        if(!empty($_FILES['ciu_imagen'])){
            $ciu_imagen=$_FILES['ciu_imagen']['name'];
            $ruta="img/$ciu_imagen";  
            move_uploaded_file($_FILES['ciu_imagen']['tmp_name'] ,$ruta);
            $id=$obj->autoincrement("Ciudad","id_ciudad");

            $sql="INSERT INTO ciudad VALUES($id,'$nombre_ciu', $id_dep,'$ruta')";
        }else{ 
            $sql="INSERT INTO ciudad VALUES($id,'$nombre_ciu',$id_dep, '')";
        }
        
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            redirect(getUrl("Ciudad","Ciudad","getInsert"));
        }else{
          echo "Ops, ha ocurrido un error";
        }
        
    }
    public function consult(){
        $obj= new CiudadModel();

        $sql="SELECT c.id_ciudad, c.nombre_ciu, d.nombre_dep, d.id_dep, c.ciu_imagen FROM ciudad c, departamento d WHERE c.id_dep=d.id_dep";
         $ciudad=$obj->consult($sql);
         
        include_once '../view/ciudad/consult.php';
    }
    public function getUpdate(){

        $obj=new CiudadModel();
        $id_ciu=$_GET['id_ciudad']; 
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
        
        if(isset($_FILES['ciu_imagen']['name'])){
            $ciu_imagen=$_FILES['ciu_imagen']['name'];
            $ruta="img/$ciu_imagen";
            move_uploaded_file($_FILES['ciu_imagen']['tmp_name'],$ruta);
          
          if (isset($_POST['img_vieja'])){
              $img_vieja=$_POST['img_vieja'];
              unlink("$img_vieja");
             } 
    
          $sql="UPDATE ciudad SET nombre_ciu='$nombre_ciu',id_dep=$id_dep, ciu_imagen='$ruta' WHERE id_ciudad=$id_ciu";
            }else{
                $sql="UPDATE ciudad SET nombre_ciu='$nombre_ciu',id_dep=$id_dep WHERE id_ciudad=$id_ciu";
            }

            $ejecutar=$obj->update($sql); //funcion consultar
        
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
    public function filtro(){

        $obj = new CiudadModel();

        $buscar=$_POST['buscar'];

        $sql="SELECT c.id_ciudad, c.nombre_ciu, d.nombre_dep, c.ciu_imagen
         FROM ciudad c, departamento d WHERE c.id_dep=d.id_dep AND (c.nombre_ciu LIKE '%$buscar%'OR d.nombre_dep LIKE '%$buscar%') ORDER BY c.id_ciudad ASC";
    $ciudades=$obj->consult($sql);

    include_once '../view/ciudad/filtro.php';
 } 
    public function getInsertModal(){
        $obj=new CiudadModel();
        $sql="SELECT * FROM departamento";
        $departamentos=$obj->consult($sql);
        include_once '../view/Ciudad/insertModal.php';
    }
}
?>