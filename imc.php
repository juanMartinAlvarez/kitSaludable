<?php session_start();
  require_once('dbconnection.php');
  require('header.php');
?>
    <link rel="stylesheet" href="estilos/estilosImc.css">
    <script type="text/javascript" src="js/funciones/imc.js"></script>
    <title>Ingreso de Usuario</title>
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
          <!-- ** Informacion** -->
          <div class="row justify-content-center">
            <row class=" col-12"><h1 class="titulo-principal">Calculo del peso ideal</h1></row>
            <row class=" col-6">                        
              <input class="form-control" type="number" 
                 name="peso" id="peso" size="3" maxlength="4" placeholder="Peso">
              <input class="form-control" type="number" 
                 name="altura" id="altura" size="3" maxlength="3" laceholder="Altura">
              <input class="btn btn-primary" type="button" value="Actualizar" 
                 onclick="calcularIMC()">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Imc">
                IMC</button>
            </row>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-center" id="Imc" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style= "height: 700px">
          <div class="modal-header bg-dark text-center">
            <h3 class="modal-title text-center" id="ModalLabel">Resultados del calculo del IMC</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="calcularIMC()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body " style= "height: 400px">
            <row >
              <div class="col-12 h-10" >
                <p> IMC:
                <input class="text-center" type="text" name="imc" id="imc" maxlength="4"></p>
              </div>
              <div class="col-12 h-90">
                <input class= "w-100 h-50 text-center" type="text" name="info" id="info"><br></br>
                <img alt="" class= "flex-column " src="img/IMC.png"/><!--image-->
              </div>
            </row>
          </div>
          <div class="modal-footer bg-dark">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>           
  </body>
</html>
