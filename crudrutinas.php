<?php
include("dbconnectionsimple.php");
include_once("rutina.php");

function mapearRutinas(){

  $sql = 'SELECT * FROM rutina';
  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $rutinasActualizadas = [];
    $result = $con->query($sql);
    
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myRutina = new Rutina();
        $myRutina->setId($row['id_rutinas']);
        $myRutina->setIdTipoDeRutinas($row['id_rutinas']);
        $myRutina->setDia($row['numero_de_dia']);
        $myRutina->setIdEjercicio($row['id_ejercicio']);
        $myRutina->setSerie($row['series']);
        $myRutina->setRepeticiones($row['repeticiones']);
        $myRutina->setDescanso($row['descanso']);
        $rutinasActualizadas[]=$myRutina;}
    }else{
		  echo "Ingresar datos...";
    }
    //en lugar de una lista debería devolver el objeto myRutina ya que no se puede hacer una lista con la query
    return $rutinasActualizadas;
  }else{
    echo " DB Error No se pudo realizar la consulta: mapearRutinas()";
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