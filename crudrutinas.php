<?php
include("dbconnectionsimple.php");
include_once("rutina.php");

function mapearRutinas(){
  // Muestra Los ultimos datos ingresados en la session de usuario
  // Ordenando descendente y lo limita al último ingreso.
  $sql = 'SELECT * FROM rutinas';
  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $datosActualizados = [];
    $result = $con->query($sql);
    
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myRutina = new Rutina();
        $myRutina->setId($row['id']);
        $myRutina->setId($row['nombre']);
        $myRutina->setId($row['intensidad']);
        $myRutina->setId($row['codigo']);
        $rutinasActualizadas[]=$myRutina;}
    }else{
		  echo "Ingresar datos...";
    }
    //en lugar de una lista debería devolver el objeto myRutina ya que no se puede hacer una lista con la query
    return $rutinasActualizadas;
  }else{
    echo " DB Error No se pudo realizar la consulta: mostrarDatosRutina()";
  }
}
function mostrarEjerciciosYRutinas(){
/*
 select e.nombre, x.repeticiones
  from ejercicios e, rutinas r, ejerciciosRutinas x
  where x.id_rutinas = r.id
  and x.id_ejercicios = e.id
  and r.id= 1 -> el id de la rutina que queres mostrar que lo obtenes de la rutina que esta consultando el chabon
*/
}

?>