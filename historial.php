<?php
  session_start();
  include_once("cruddatos.php");
  require_once('dbconnection.php');
  require_once('header.php')
?>
  <link rel="stylesheet" href="estilos/estilosHistorial.css">
  </head>

  <body>
    <header>
      <h1 onclick="location.href='menuprincipal.php'">KitSaludable</h1>
    </header>

    <div class="modal-dialog">
      <div class="col-12 main-section">
        <div class="modal-content bg-dark col-sm-12">
          <div class="col-sm-12 user-img text-center">
            <img alt="" src="img/usr.png"/><!-- user image-->
          </div>

          <!-- Mostrar datos en pantalla-->  
          <div class="bg-dark col-sm-12">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Edad</th>
                  <th scope="col">Peso</th>
                  <th scope="col">Altura</th>                           
                  <th scope="col">Rutina</th>
                  <th scope="col">Dieta</th>
                  <th scope="col">Fecha</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php 
                  $fila = mostrarHistorial();
                  foreach ($fila as $persona) { ?>
                    <td><?php echo $persona->getedad() ?></td>
                    <td><?php echo $persona->getpeso() ?></td>
                    <td><?php echo $persona->getaltura() ?></td>
                    <td><?php echo $persona->getRutinas() ?></td>
                    <td><?php echo $persona->getDietas() ?></td>
                    <td><?php echo $persona->getFecha() ?></td>
                </tr><?php 
                  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <style>
    body{
      background: url(img/alimentos-sanos.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .titulo-principal{
      color:#fff;
      font-size: 20px;
      margin: 0px;
      padding: 10px 0;
      text-align: center;
    }
    .main-section{
      margin: 0 auto;
      margin-top: 15%;
      padding: 0;
    }
    .modal-title{
      color:#fff;
      font-size: 20px;
      margin: 0px;
      padding: 10px 0;
      text-align: center;
    }
    .user-img{
      margin-top: -50px;
      margin-bottom: 15px;
    }
    .user-img img{
      width: 100px;
      height: 100px;
    }
    .form-control{
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .btn{
      margin-top: 20px;
      margin-bottom: 20px;
    }
    </style>
  </body>
</html>
