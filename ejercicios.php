<?php
session_start();
$varsesion = $_SESSION['login'];
if ($varsesion == null || $varsesion = '') {
  echo  'Usted no tiene autorizacion';
  die();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estiloEjercicios.css">
    <script src="js/jquery/jquery-3.4.1.min.js"></script>
    <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <title>Ejercicios</title>
    <script>
      $(function(){
        $('#select-dietas').on('change', function() {
        $('#the-link').attr('href', '?' + $(this).val());
        });
      });
    </script>
  </head>
  
  <body>
    <header>
      <h1 onclick="location.href='menuprincipal.php'">KitSaludable</h1>
    </header>

    <div id="contenido1">
      <div id="row1">
        <h3 id="tRow1">RUTINAS:</h3>
        <!-- si existen ejercicios en la base de datos hay que hacer una clase para ejercicios y mostrarlos igual que mostramos los datos en el cruddatos -->

        <select id="select-dietas" multiple>
          <option disable selected>--Seleccione una Rutina--</option>
          <?php
          require('crudrutinas.php');
          require_once('dbconnectionsimple.php');
          $sql = 'SELECT * FROM rutinas';
          $con = conectar(); // dbconnectionsimple.php funtion
          if ($con->query($sql)) { // check consulta ok
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              foreach ($result as $opciones):?>
                <option value="<?php echo $opciones['url']; ?>"><?php echo $opciones['nombre']; ?></option><?php
              endforeach;
              }
            }
          ?>
        </select>
      
        <div>
          <br></br><a href='?' id='the-link'> Seleccionar</a><br></br>
        </div>
      </div>

    <div id="row2">
    <h3 id="tRow2">EJERCICIOS</h3> 
      <table id='tabla' bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
        <tr class="success">
          <th><h2>Dia°</h2></th>
          <th><h2>Series</h2></th>
          <th><h2>Repeticiones</h2></th>
          <th><h2>Descanso</h2></th>
        </tr>

          <?php//aca hay que hacer una query, si en el get figura algun codigo que conozcamos, 
          //hay que buscar el codigo en la base y mostrar la info de los ejercicios vinculados a ese codigo(rutina)
          //$listaRutinas[] = mapearRutinas();
          //if(isset($_GET['codigo'])){
          //  echo "info de ese codigo";
         // }?>

          <?php 
            $fila= mapearRutinas();
            foreach($fila as $rutina){?>
            <tr><td><h2><?php echo $rutina->getDia(); ?></h2></td>
                <td><h2><?php echo $rutina->getSerie(); ?></h2></td>
                <td><h2><?php echo $rutina->getRepeticiones(); ?></h2></td>
                <td><h2><?php echo $rutina->getDescanso(); ?></h2></td></tr>
            <?php }
          ?>
                
        </tr>
      </table>
    </div>
    </div>
    <!--
    <div id="contenido2">
      <div id="row1">
        <h3>Cantidad de calorias que quieres quemar</h3><br></br>
          <select name="select Calorias" multiple>
            <option value="" disable selected>--Seleccione una Calorias--</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
            <option value="500">500</option>
          </select>
        </div>
        <div id="row2">
        <h3>Lista de ejercicios de la de la rutina seleccionada</h3><br></br>
        <table bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
          <tr class="success">
            <th><h2>N°</h2></th>
            <th><h2>Alimentos</h2></th>
            <th><h2>Calorias</h2></th>
            <th><h2>Descripcion</h2></th>
          </tr>
          <tr>
            <td><h2>1</h2></td>
            <td><h2>2</h2></td>
            <td><h2>3</h2></td>
            <td><h2>4</h2></td>
          </tr>
        </table>
      </div>
    </div>-->
  </body>
</html> 