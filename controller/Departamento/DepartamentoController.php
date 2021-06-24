<?php


//getInsert -> en el get se coloca la recolecciòn de informacion mediante el formulario, se aplica la parte de la vista, toda la recolección de datos
//en el get se recolectan datos 
//en el post se registra en la BBDD 
//las funciones que tengan logica se usa con postInsert

include_once '../model/Departamento/DepartamentoModel.php';
Class DepartamentoController{

    public function getInsert(){
        include_once '../view/departamento/insert.php';
    }
 
    public function postInsert(){
        $obj=new DepartamentoModel();
        
        $dep_nombre=$_POST['nombre_dep'];

        $sql="INSERT INTO departamento VALUES(null,'$dep_nombre')";

        $ejecutar=$obj->insert($sql);

        if ($ejecutar){
            redirect(getUrl("Departamento","Departamento","getInsert"));
        }else{
            echo "Ops, ha ocurrido un error";
        }
    }
    public function consult(){
        $obj= new DepartamentoModel();
        $sql="SELECT * FROM departamento";

        $departamentos=$obj->consult($sql);

        include_once '../view/Departamento/consult.php';
    }
    public function getUpdate(){
        $obj=new DepartamentoModel();
        $dep_id=$_GET['id_dep']; //OJITO A ESTO 

        $sql="SELECT * FROM departamento WHERE id_dep=$dep_id";
        $departamento=$obj->consult($sql);

        include_once '../view/departamento/update.php';
    }
    public function postUpdate(){
        $obj=new DepartamentoModel();
        $dep_id=$_POST['id_dep'];
        $dep_nombre=$_POST['nombre_dep'];

        $sql="UPDATE departamento SET nombre_dep='$dep_nombre' WHERE id_dep=$dep_id";
        $ejecutar=$obj->update($sql);
        
        if ($ejecutar) {
            redirect (getUrl("Departamento", "Departamento", "consult"));
        }else {
           echo "Ops, ha ocurrido un error";
        }
    }
    public function getDelete(){
        $obj=new DepartamentoModel();

        $dep_id=$_GET['id_dep'];

        $sql="SELECT * FROM departamento WHERE id_dep=$dep_id";

       $departamento=$obj->consult($sql);

        include_once '../view/departamento/delete.php';
    }
    public function postDelete(){

        $obj=new DepartamentoModel();

        $dep_id=$_POST['id_dep'];

        $sql="DELETE FROM departamento WHERE id_dep=$dep_id";

        $ejecutar=$obj->delete($sql);
        
        if ($ejecutar) {
            redirect (getUrl("Departamento", "Departamento", "consult"));
        }else {
           echo "Ops, ha ocurrido un error";
        }
    }
    public function filtro(){

        $obj = new DepartamentoModel();

        $buscar=$_POST['buscar'];

        $sql="SELECT id_dep , nombre_dep 
         FROM departamento WHERE id_dep=id_dep AND  nombre_dep LIKE '%$buscar%' ORDER BY id_dep ASC";
    $departamento=$obj->consult($sql);

    include_once '../view/departamento/filtro.php';
}
}

?>