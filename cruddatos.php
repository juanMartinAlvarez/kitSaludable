<?php

include("dbconnectionsimple.php");
include_once("persona.php");
include("includes/login.php");
  

function mostrarDatos(){
  
  $con = conectar();
  //if ($con){
  //por ahora mostramos todas las personas para probar, pero solo mostraria los datos de una persona
  
  $sql = 'SELECT * FROM personas WHERE id_users=\''.$_SESSION['id'].'\'';
  echo $sql;
  if($con -> query($sql)){
    $listadepersonas = [];
    $result = $con->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myPersona = new Persona();
        $myPersona->setId($row['id']);
        $myPersona->setPeso($row['peso']);
        $myPersona->setAltura($row['altura']);
        $myPersona->setEdad($row['edad']);
        $myPersona->setNombre($row['nombre']);
        $myPersona->setApellido($row['apellido']);
        $listadepersonas[]=$myPersona;
      }
    }
    return $listadepersonas;
  }else{
    echo "No se pudo hacer la query de mostrarDatos";
  }
  //}
}
/*
INSERT INTO `personas` (`id`, `nombre`, `apellido`, `edad`, `peso`, `altura`) VALUES
(1, 'Miguel', 'Tato', '30', '80', '180'),
(2, 'Anuj', 'Kumar', '19', '73', '190',);
*/

?>