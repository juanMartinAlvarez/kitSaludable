<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="i3-edge">
        <link rel="stylesheet" href="estilos/estilos.css">
        <link href="css/bootstrap.css" media="all" rel="stylesheet">
      	<?php
          session_start();
          include_once("cruddatos.php");
          require_once('dbconnection.php');
        ?>
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
                            <th scope="col">Fecha</th>
                            <th scope="col">Rutina</th>
                            <th scope="col">Dieta</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php 
                            $fila = mostrarDatosPersona();
                              
                                foreach ($fila as $persona) { ?>
                                  <td><?php echo $persona->getFecha() ?></td>
                                  <td><?php echo $persona->getid_ejerciciosRutinas ?></td>
                                  <td><?php echo $persona->getid_alimentosDietas ?></td>
                            <?php } ?>
                          </tr>
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

    <!-- Bootstrap CSS -->
        <script src="js/jquery/jquery-3.4.1.min.js"></script>
        <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
        <script src="js/popper/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
