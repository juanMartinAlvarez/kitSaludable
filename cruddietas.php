<?php 
include("dbconnectionsimple.php");
include_once("claseAlimentos.php");
include_once("persona.php");

function mapearDietas($idUrl){
  $sql = 'select a.id, a.nombre , a.calorias, d.id, d.nombre as dieta, d.calorias as DCalorias, x.id, x.id_dietas, x.id_alimentos,x.tipo 
  from alimentos a, dietas d, alimentosDietas x
  where x.id_alimentos = a.id
  and x.id_dietas = d.id
  and x.id_dietas = '.$idUrl.'';

  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $alimentosActualizados = [];
    $result = $con->query($sql);
    
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myDieta = new Alimentos();
        $myDieta->setId($row['id']);
        $myDieta->setNombre($row['nombre']);
        $myDieta->setCalorias($row['calorias']);
        $myDieta->setTipo($row['tipo']);
        $alimentosActualizados[]=$myDieta;}
    }else{
		  echo "Ingresar datos...";
    }
    return $alimentosActualizados;
  }else{
    echo " DB Error No se pudo realizar la consulta: mapearRutinas()";
  }
}

function dietaEsNull(){
  $sql = "SELECT `id_alimentosDietas` FROM `personas` ORDER BY id DESC LIMIT 1 ";
  $con= conectar();
  $result= $con->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
     if($row['id_alimentosDietas'] ==NULL){
       return(true);
     }else{
       return(false);
     }
    }
  }
}
function dietaActual(){
  $sql = 'SELECT d.nombre as dieta, p.fecha FROM personas p, dietas d 
  where p.id_alimentosDietas = d.id and p.id_users=\''.$_SESSION['id'].'\' ORDER BY fecha DESC LIMIT 1';
  $con= conectar();
  $result = $con->query($sql);
  if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
      if(dietaEsNull()){
       return ('Sin Seleccion');
     }else{
       return ($row['dieta']);
     }
    }
  }else{
    echo ('no se pudo hacer la consulta');
  }
}
?>