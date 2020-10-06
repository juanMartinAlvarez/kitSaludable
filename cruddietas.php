<?php
include("dbconnectionsimple.php");
include_once("claseAlimentos.php");

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
    //en lugar de una lista debería devolver el objeto myDieta ya que no se puede hacer una lista con la query
    return $alimentosActualizados;
  }else{
    echo " DB Error No se pudo realizar la consulta: mapearRutinas()";
  }
}
function mostrarDietasYAlimentos(){
/*
 select e.nombre, x.repeticiones
  from ejercicios e, rutinas r, ejerciciosRutinas x
  where x.id_rutinas = r.id
  and x.id_ejercicios = e.id
  and r.id= 1 -> el id de la rutina que queres mostrar que lo obtenes de la rutina que esta consultando el chabon
*/
}

?>