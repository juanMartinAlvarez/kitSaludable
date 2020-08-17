<?php

  session_start();
  $varsesion = $_SESSION['login'];

  if($varsesion == null || $varsesion = '')
  {
    echo  'Usted no tiene autorizacion';
    die();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap -->
    <script src="js/jquery/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones/eMap.js"> </script>
    
    
    <!--iconito-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos.css">
  
  <title>Kit Saludable</title>
  
  </head>
  <body>
      
    <div id="contenedor">
        <header>
            <h1 id="ksinicio" onclick="location.href='index.html'">KitSaludable</h1>
        </header>
        
        <nav>
            <ul>                
                <li><button class="btn btn-primary" onclick="location.href=
                  'imc.html'" >IMC</button>
                </li>
                <li><button class="btn btn-primary" onclick="location.href=
                  '#'" >Contacto</button>
                </li>
                <li><button class="btn btn-primary" onclick="location.href=
                  'datos.php'" >Datos</button>
                </li>
                <li><button class="btn btn-primary" onclick="location.href=
                  'cerrarsesion.php'">Cerrar sesion</button>
                </li>
              </ul>
        </nav>
        
        <div id="contenido">
            
            <section id="banner">
              <a href="#"><img src="img/banner.jpg" alt="banner" border="0"></a> 
            </section>
            
            <section id="alimentos">
                <article>
                  <h2><a>ALIMENTOS</a></h2>
                  <img src="img/alimentos-sanos.jpg" alt="Dietas" width="350" height="350" class="img-responsive" onclick="location.href='alimentos.html'">
                </article>
            </section>    
            
            <section id="ejercicios">  
                <article>
                  <h2><a>EJERCICIOS</a></h2>
                  <img src="img/ella-el.jpg" alt="Ejercicios" width="350" height="350" class="img-responsive" onclick="location.href='ejercicios.html'">
                </article>
            </section>
            
		 	<section id="banner1">
              <a href="#"><img src="img/banner.jpg" alt="banner" border="0"></a> 
            </section>
			
         </div>
        
        <footer class="fixed-bottom">
            Todos los derechos reservados 2020  
        </footer>
    </div>
  </body> 
</html>