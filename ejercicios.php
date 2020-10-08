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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap -->
  <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--iconito-->
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" media="all" rel="stylesheet">
  <link rel="stylesheet" href="estilos/estilos.css">
  
  <script src="js/funciones/historial.js"></script>
  <link rel="stylesheet" href="estilos/estiloEjercicios.css">
  <title>Ejercicios</title>
  <script>
    $(function() {
      $('#select-ejercicios').on('change', function() {
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
    <!-- Row 1 Select rutina -->
    <div id="row1">
      <h3 id="tRow1">RUTINAS:</h3>
      <select id="select-ejercicios" multiple>
        <option disable selected>--Seleccione una Rutina--</option>
        <?php
        require('crudrutinas.php');
        require_once('dbconnectionsimple.php');
        $sql = 'SELECT * FROM rutinas';
        $con = conectar(); // dbconnectionsimple.php funtion
        if ($con->query($sql)) { // check consulta ok
          $result = $con->query($sql);
          if ($result->num_rows > 0) {
            foreach ($result as $opciones) : ?>
              <option value="<?php echo $opciones['id']; ?>"><?php echo $opciones['nombre']; ?></option><?php
            endforeach;
          }
        }
        ?>
      </select>

      <div>
        <br></br><a href='?' id='the-link'> Seleccionar</a><br></br>
        <?php
        if (isset($_GET['1'])) {$idUrl = "1";}
        if (isset($_GET['2'])) {$idUrl = "2";}
        if (isset($_GET['3'])) {$idUrl = "3";}
        ?>
        <div>
          <?php if (isset($idUrl)) { ?><br></br>
            <buton class="btn btn-primary" id='historial' onclick="appendHistory()"> Guardar rutina
            </buton><br></br>
            <?php
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

            if (strpos($url, '&appendHistory')) {
              $sqlPersonaExiste = 'select * from personas WHERE id_users=' . $_SESSION['id'] . '';
              if ($con->query($sqlPersonaExiste)) {
                $result = $con->query($sqlPersonaExiste);
                if (!$result->num_rows > 0) {
                  echo "<script>alert('Debes ingresar tus datos antes de guardar una rutina!')</script>";
                } else {
                  $sqlHistorial = 'update personas SET id_ejerciciosRutinas =' . $idUrl . '
                WHERE id_users=' . $_SESSION['id'] . ' ORDER BY id DESC LIMIT 1';

                  $con = conectar();
                  if ($con->query($sqlHistorial)) { // check consulta ok
                    $result = $con->query($sqlHistorial);
                    if ($result) {
                      echo "<script>alert('Historial de rutinas actualizado correctamente')</script>";
                    }
                  }
                }
              }
            } else {
              if (isset($idUrl)) {
                echo "Rutina establecida, haz click en Guardar Rutina para guardarla en el historial";
              } else {
                echo "Debes establecer una rutina antes de guardarla en el historial";
              }
            }
            ?>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <!-- Row 2 Ejercicios table -->
    <div id="row2">
      <h3 id="tRow2">EJERCICIOS</h3>
      <table id='tabla' bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
        <tr class="success">
          <th><h2>Dia°</h2></th>
          <th><h2>Musculo</h2></th>
          <th><h2>Nombre</h2></th>
          <th><h2>Series</h2></th>
          <th><h2>Repeticiones</h2></th>
          <th><h2>Descanso</h2></th>
        </tr>
        <!-- Show rutinas-->
        <?php
        if (isset($idUrl)) {
          $fila = mapearRutinas($idUrl);
          foreach ($fila as $rutina) { ?>
            <tr>
              <td>
                <h2><?php echo $rutina->getDia(); ?></h2>
              </td>
              <td>
                <h2><?php echo $rutina->getMusculo(); ?></h2>
              </td>
              <td>
                <h2><?php echo $rutina->getNombre(); ?></h2>
              </td>
              <td>
                <h2><?php echo $rutina->getSerie(); ?></h2>
              </td>
              <td>
                <h2><?php echo $rutina->getRepeticiones(); ?></h2>
              </td>
              <td>
                <h2><?php echo $rutina->getDescanso(); ?></h2>
              </td>
            </tr>
        <?php }
        }
        ?>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>