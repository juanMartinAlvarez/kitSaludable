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

    <title>Dietas</title>
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
        <h3 id="tRow1">DIETAS:</h3>
        <!-- si existen ejercicios en la base de datos hay que hacer una clase para ejercicios y mostrarlos igual que mostramos los datos en el cruddatos -->

        <select id="select-dietas" multiple>
          <option disable selected>--Seleccione una Dieta--</option>
          <?php
          require('cruddietas.php');
          require_once('dbconnectionsimple.php');
          $sql = 'SELECT * FROM dietas';
          $con = conectar(); // dbconnectionsimple.php funtion
          if ($con->query($sql)) { // check consulta ok
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              foreach ($result as $opciones):?>
                <option value="<?php echo $opciones['id']; ?>"><?php echo $opciones['nombre']; ?></option><?php
              endforeach;
              }
            }
          ?>
        </select>
      
        <div>
          <br></br><a href='?' id='the-link'>Seleccionar</a><br></br>
          <?php 
            if(isset($_GET['1'])){$idUrl="1";}
            if(isset($_GET['2'])){$idUrl="2";}
            if(isset($_GET['3'])){$idUrl="3";}
            if(isset($_GET['4'])){$idUrl="4";}
            if(isset($_GET['5'])){$idUrl="5";}
            if(isset($_GET['6'])){$idUrl="6";}
          ?>
          <br></br><a href='?' id='historial'> Aplicar </a><br></br>
        </div>
      </div>

    <div id="row2">
    <h3 id="tRow2">LISTA DE ALIMENTOS</h3> 
      <table id='tabla' bgcolor="2c3e50" class="table table-striped table-bordered table-hover">
        <tr class="success">
          <th><h2>Nombre</h2></th>
          <th><h2>Calorias</h2></th>
          <th><h2>Tipo</h2></th>
        </tr>
        <?php
          if(isset($idUrl)){
            $fila= mapearDietas($idUrl);
            foreach($fila as $alimento){?>
            <tr><td><h2><?php echo $alimento->getNombre(); ?></h2></td>
                <td><h2><?php echo $alimento->getCalorias(); ?></h2></td>
                <td><h2><?php echo $alimento->getTipo(); ?></h2></td>
            <?php }
            }
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