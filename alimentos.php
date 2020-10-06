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
  <link rel="stylesheet" href="estilos/estilosAlimentos.css">
  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

  <script>
    function appendHistory() {
      var url = window.location.href,
        separator = (url.indexOf("?") === -1) ? "?" : "&",
        newParam = separator + "appendHistory";
      newUrl = url.replace(newParam, "");
      newUrl += newParam;
      window.location.href = newUrl;
    }
  </script>

  <title>Dietas</title>
  <script>
    $(function() {
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
  <!-- Row 1 Select Dieta -->
  <div id="contenido1">
    <div id="row1">
      <h3 id="tRow1">DIETAS:</h3>
      <select id="select-dietas" multiple>
        <option disable selected>--Seleccione una Dieta--</option>
        <?php
        require('cruddietas.php');
        require_once('dbconnectionsimple.php');
        $sqlDietas = 'SELECT * FROM dietas';
        $con = conectar(); // dbconnectionsimple.php funtion
        if ($con->query($sqlDietas)) { // check consulta ok
          $result = $con->query($sqlDietas);
          if ($result->num_rows > 0) {
            foreach ($result as $opciones) : ?>
              <option value="<?php echo $opciones['id']; ?>"><?php echo $opciones['nombre']; ?></option><?php
                                                                                                      endforeach;
                                                                                                    }
                                                                                                  }
                                                                                                        ?>
      </select>

      <div>
        <br></br><a href='?' id='the-link'>Seleccionar</a><br></br>
        <?php
        if (isset($_GET['1'])) {
          $idUrl = "1";
        }
        if (isset($_GET['2'])) {
          $idUrl = "2";
        }
        if (isset($_GET['3'])) {
          $idUrl = "3";
        }
        if (isset($_GET['4'])) {
          $idUrl = "4";
        }
        if (isset($_GET['5'])) {
          $idUrl = "5";
        }
        if (isset($_GET['6'])) {
          $idUrl = "6";
        }
        ?>
      </div>
      <div>
        <?php if (isset($idUrl)) { ?><br></br>
          <buton class="btn btn-primary" id='historial' onclick="appendHistory()"> Guardar dieta



          </buton><br></br>
          <?php
          $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          
          if (strpos($url, '&appendHistory')) {
            $sqlPersonaExiste = 'select * from personas WHERE id_users=' . $_SESSION['id'] . '';
            if ($con->query($sqlPersonaExiste)) {
              $result = $con->query($sqlPersonaExiste);
              if (!$result->num_rows > 0) {
                echo "<script>alert('Debes ingresar tus datos antes de guardar una dieta!')</script>";
              } else {
                $sqlHistorial = 'update personas SET id_alimentosDietas =' . $idUrl . '
                WHERE id_users=' . $_SESSION['id'] . ' ORDER BY id DESC LIMIT 1';

                $con = conectar();
                if ($con->query($sqlHistorial)) { // check consulta ok
                  $result = $con->query($sqlHistorial);
                  if ($result) {
                    echo "<script>alert('Historial de dietas actualizado correctamente')</script>";
                  }
                }
              }
            }
          } else {
            if (isset($idUrl)) {
              echo "Dieta establecida, haz click en Guardar dieta para guardarla en el historial";
            } else {
              echo "Debes establecer una dieta antes de guardarla en el historial";
            }
          }
          ?>
        <?php
        }
        ?>
      </div>

    </div>
    <!-- Row 2 Alimentos table -->
    <div id="row2">
      <h3 id="tRow2">LISTA DE ALIMENTOS</h3>
      <table id='tabla' bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
        <tr class="success">
          <th>
            <h2>Nombre</h2>
          </th>
          <th>
            <h2>Calorias</h2>
          </th>
          <th>
            <h2>Tipo</h2>
          </th>
        </tr>
        <?php
        if (isset($idUrl)) {
          $fila = mapearDietas($idUrl);
          foreach ($fila as $alimento) { ?>
            <tr>
              <td>
                <h2><?php echo $alimento->getNombre(); ?></h2>
              </td>
              <td>
                <h2><?php echo $alimento->getCalorias(); ?></h2>
              </td>
              <td>
                <h2><?php echo $alimento->getTipo(); ?></h2>
              </td>
          <?php }
        }
          ?>
            </tr>
      </table>
    </div>
  </div>
</body>

</html>