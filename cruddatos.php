<?php session_start();
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
		  echo "<br><p class='text-white text-center'>   Ingresar datos...</p>";
    }
    //en lugar de una lista debería devolver el objeto mypersona ya que no se puede hacer una lista con la query
    return $datosActualizados;
  }else{
    echo "<p class='text-white text-center'> DB Error No se pudo realizar la consulta: mostrarDatosPersona()</p>";
  }
}

function mostrarHistorial(){
  $sql= 'SELECT p.edad, p.peso, p.altura,d.nombre as dieta,r.nombre as rutina,p.fecha FROM personas p, dietas d, rutinas r 
        where p.id_alimentosDietas = d.id
        and p.id_ejerciciosRutinas = r.id
        and id_users=\''.$_SESSION['id'].'\'';
  // $sql = 'SELECT * FROM personas WHERE id_users=\''.$_SESSION['id'].'\' ORDER BY id DESC';
  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $datosActualizados = [];
    $result = $con->query($sql);  
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myPersona = new Persona();
        $myPersona->setEdad($row['edad']);
        $myPersona->setPeso($row['peso']);
        $myPersona->setAltura($row['altura']);
        $myPersona->setRutinas($row['rutina']);
        $myPersona->setDietas($row['dieta']);
        $myPersona->setFecha($row['fecha']);
        $datosActualizados[]=$myPersona;}
    }else{
		  echo "<p class='text-white text-center'>   Ingresar datos...</p>";
    }
    return $datosActualizados;
  }else{
    echo "<p class='text-white text-center'> DB Error No se pudo realizar la consulta: mostrarDatosPersona()</p>";
  }
}

function renovarDatos($peso,$altura,$edad,$sessionid){
  $sql = "insert into personas(peso,altura,edad,id_users) values($peso,$altura,$edad,$sessionid)";
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