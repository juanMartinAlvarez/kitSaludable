<?php
  require_once('autorized.php');
  require_once('header.php');
?>
    <title>Kit Saludable</title>
  </head>
  <body>
      
    <div id="contenedor">
      <header>
        <h1 id="ksinicio" onclick="location.href='menuprincipal.php'">KitSaludable</h1>
      </header>
      <nav>
        <ul>                
          <li><button class="btn btn-primary" onclick="location.href=
            'imc.php'">IMC</button></li>
          <li><button class="btn btn-primary" onclick="location.href=
            'historial.php'" >Historial</button></li>
          <li><button class="btn btn-primary" onclick="location.href=
            'datos.php'" >Datos</button></li>
          <li><button class="btn btn-primary" onclick="location.href=
            'cerrarsesion.php'">Cerrar sesion</button></li>
        </ul>
      </nav> 
      
      <div id="contenido">
        <section id="banner">
          <a href="#"><img src="img/banner.jpg" alt="banner" border="0"></a> 
        </section>

        <section id="alimentos">
          <article>
            <h2><a>ALIMENTOS</a></h2>
            <img src="img/alimentos-sanos.jpg" alt="Dietas" width="350" height="350" class="img-responsive" onclick="location.href='alimentos.php'">
          </article>
        </section>    

        <section id="ejercicios">  
          <article>
            <h2><a>EJERCICIOS</a></h2>
            <img src="img/ella-el.jpg" alt="Ejercicios" width="350" height="350" class="img-responsive" onclick="location.href='ejercicios.php'">
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