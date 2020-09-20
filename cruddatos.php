<?php
include("dbconnectionsimple.php");
include_once("persona.php");

function mostrarDatosPersona(){
  // Muestra Los ultimos datos ingresados en la session de usuario
  // Ordenando descendente y lo limita al último ingreso.
  $sql = 'SELECT * FROM personas WHERE id_users=\''.$_SESSION['id'].'\' ORDER BY id DESC LIMIT 1';
  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $datosActualizados = [];
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
        $datosActualizados[]=$myPersona;}
    }else{
		  echo "Ingresar datos...";
    }
    //en lugar de una lista debería devolver el objeto mypersona ya que no se puede hacer una lista con la query
    return $datosActualizados;
  }else{
    echo " DB Error No se pudo realizar la consulta: mostrarDatosPersona()";
  }
}

function renovarDatos($peso,$altura,$edad,$sessionid,$fecha){
  // setear fecha actualizada, en la consulta
  //$fecha = date("Y-m-d H:i:s", strtotime($string));
  $sql = "insert into personas(peso,altura,edad,id_users,fecha) values($peso,$altura,$edad,$sessionid,$fecha)";
  $con = conectar();
  
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
?>