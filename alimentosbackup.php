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
        <meta http-equiv="x-ua-compatible" content="i3-edge">
        <link href="css/bootstrap.css" media="all" rel="stylesheet">
        
        <title>Alimentos</title>
    </head>
    
    <body>
         
        <header>
            <h1 onclick="location.href='menuprincipal.php'">KitSaludable</h1>
        </header>
        <!--contenedor-->
        <div class="container-fluid ">
            <!--fila--><br>
            <div class="row justify-content-between align-items-start  h-100">
                <!--columna calorias-->
                <div class="col-12 col-md-2 ">   
                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-menu-right" data-toggle="dropdown" > Calorias</button>
                    <div class="dropdown-menu" style="min-width: 100px " >
  
                        <a href="#" class="dropdown-item">100</a>
                        <a href="#" class="dropdown-item">200</a>
                        <a href="#" class="dropdown-item">300</a>
                    </div>
                </div>
                 <!--columna tabla calorias-->
                <div class="col-12 col-md-9 ">   
                    <h2 class="bg-dark text-center ">Lista de alimentos con las calorias determinadas</h2>
                    <table  class="table table-responsive-xs table-dark table-bordered table-hover">
                        <tr>
                            <th>N°</th>
                            <th>Alimentos</th>
                            <th>Calorias</th>
                            <th>Descripcion</th>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </table>   
                </div>
            </div>
            
            <!--fila-->
            <div class="row justify-content-between align-items-start  h-100">    
                <!--columna dietas-->
                <div class="col-12 col-md-2 ">   
                    <button type="button" class="btn btn-dark dropdown-toggle " data-toggle="dropdown" > Seleccione una Dieta </button>
                    <div class="dropdown-menu dropdown-menu-right" style="width: 190px ">
  
                        <a href="#" class="dropdown-item">Calorica</a>
                        <a href="#" class="dropdown-item">Harinas</a>
                        <a href="#" class="dropdown-item">Limon</a>
                        <a href="#" class="dropdown-item">Azucares</a>
                        <a href="#" class="dropdown-item">Vegetariana</a>
                        
                    </div>
                </div>
                 <!--columna tabla dietas-->
                <div class="col-12 col-md-9 ">   
                    <h2 class="bg-dark text-center ">Lista de alimentos con las calorias determinadas</h2>
                    <table  class="table table-responsive-xs table-dark table-bordered table-hover">
                        <tr>
                            <th>N°</th>
                            <th>Alimentos</th>
                            <th>Calorias</th>
                            <th>Descripcion</th>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </table>   
                </div>   
            </div>
        </div>           
         
        <style>
        body{
        background: url(img/alimentos-sanos.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;}
        header{
            background:#2c3e50;
            text-align: center;
        }
        h1, h2, h3{
            margin: 0px;}
        h1{
         color:#fff;
         font-size: 40px;
         margin: 0px;
         padding: 10px 0;
         text-align: center;}
        h2{
            color:#fff;
            font-size: 20px;
            margin: 0px;}
        h3{
            color:#2c3e50;
            font-size: 20px;
            margin: 0px;}   
    </style>
       
    <!--Bootstrap CSS -->
     <script src="js/jquery/jquery-3.4.1.min.js"></script>
     <script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
     <script src="js/popper/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
