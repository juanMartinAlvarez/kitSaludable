<?php

include("dbconnectionsimple.php");
include_once("persona.php");

//session_start();

function mostrarDatos(){
  
  $con = conectar();
  //if ($con){
  //por ahora mostramos todas las personas para probar, pero solo mostraria los datos de una persona
  
  //El problema de datos es que, cuando una persona ingresa al sistema no tiene datos, y nosotros estabamos intentando mostrarle los datos.
  //deberíamos tener en cuenta si la persona no tiene datos, y si es así, pedirle q llene sus datos en lugar de intentar mostrarselos
  
  //SELECT * FROM `personas` ORDER BY id DESC LIMIT 1
  $sql = 'SELECT * FROM personas WHERE id_users=\''.$_SESSION['id'].'\' ORDER BY id DESC LIMIT 1';
  //echo $sql;
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
        $myPersona->setNombre($_SESSION['nombre']);
        $myPersona->setApellido($_SESSION['apellido']);
        $myPersona->setFecha($row['fecha']);
        $listadepersonas[]=$myPersona;
      }
    }else{
		echo "No tiene datos";
  }
  //en lugar de una lista debería devolver el objeto mypersona ya que no se puede hacer una lista con la query
    return $listadepersonas;
  }else{
    echo "No se pudo hacer la query de mostrarDatos";
  }
  //}
}

function renovarDatos($peso,$altura,$edad,$sessionid){
  $con = conectar();

  //aca hay que obtener la fecha actual, guardarla, y meterla en el insert, la query quedaría así
  //$sql = "insert into personas(peso,altura,edad,id_users,fecha) values($peso,$altura,$edad,$sessionid,$fecha)";

  $sql = "insert into personas(peso,altura,edad,id_users) values($peso,$altura,$edad,$sessionid)";

  if($peso = "" || $peso == null){
    echo "<script>alert('Debes ingresar valores para poder actualizar tus datos')</script>";
  }else{
    if ($con->query($sql)) {
      echo "<script>alert('Datos actualizados exitosamente')</script>";
    } else {
      echo ("<script>alert('Error al actualizar la tarea: " + $con->connect_error + ")</script>");
  }
  
}
echo "<script>document.location = 'datos.php';</script>";
  

}
/*
INSERT INTO `personas` (`id`, `nombre`, `apellido`, `edad`, `peso`, `altura`) VALUES
(1, 'Miguel', 'Tato', '30', '80', '180'),
(2, 'Anuj', 'Kumar', '19', '73', '190',);
*/
?>