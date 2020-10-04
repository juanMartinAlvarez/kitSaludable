<?php
include("dbconnectionsimple.php");
include_once("rutina.php");

function mapearRutinas($idUrl){

  $sql = 'select e.nombre, e.musculo, x.numero_de_dia, x.series, x.repeticiones, x.descanso
  from ejercicio e, rutinas r, listadejercicios x
  where x.id_rutinas = r.id
  and x.id_ejercicio = e.id
  and x.id_rutinas = '.$idUrl.'';
  
  $con = conectar();// dbconnectionsimple.php funtion
  if($con -> query($sql)){ // check consulta ok
    $rutinasActualizadas = [];
    $result = $con->query($sql);
    
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $myRutina = new Rutina();
        $myRutina->setNombre($row['nombre']);
        $myRutina->setMusculo($row['musculo']);
        $myRutina->setDia($row['numero_de_dia']);
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
function mostrardietassYRutinas(){
/*
 select e.nombre, x.repeticiones
  from dietass e, rutinas r, dietassRutinas x
  where x.id_rutinas = r.id
  and x.id_dietass = e.id
  and r.id= 1 -> el id de la rutina que queres mostrar que lo obtenes de la rutina que esta consultando el chabon
*/
}

?>