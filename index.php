<?php session_start();
  require_once('dbconnection.php');
  require_once('includes/login.php');
  require_once('includes/registro.php');
  require_once('includes/olvido.php');
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
    <link rel="stylesheet" href="estilos/estilosImc.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    
		<title>KitSaludable</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default',       
					width: 'auto', 
					fit: true 
				});
			});
		</script>

	</head>

<body>
<div class="main">
  
<div class="sap_tabs">
  <h1>Kit Saludable</h1>
  <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
    <ul class="resp-tabs-list">
      <li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
        <div class="top-img"><img src="images/top-note.png" alt="" data-toggle="tooltip" data-placement="bottom" title="REGISTRARSE"/></div></li>
      <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
        <div class="top-img"><img src="images/top-lock.png" alt="" data-toggle="tooltip" data-placement="bottom" title="INGRESAR"/></div></li>
      <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab">
        <div class="top-img"><img src="images/top-key.png" alt="" data-toggle="tooltip" data-placement="bottom" title="RESTABLECER CONTRASEÑA"/></div></li>
      <div class="clear"></div>
    </ul>		

    <div class="resp-tabs-container">
      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
        <div class="facts">
          <div class="register">
            <form name="registration" method="post" action="" enctype="multipart/form-data">
              <p>Nombre/s </p>
              <input type="text" class="text" value=""  name="fname" required >
              <p>Apellido/s </p>
              <input type="text" class="text" value="" name="lname"  required >
              <p>Direccion de correo </p>
              <input type="text" class="text" value="" name="email"  >
              <p>Contrase&ntilde;a </p>
              <input type="password" value="" name="password" required>
              <div class="sign-up">
              <input type="reset" value="Restablecer los campos">
              <input type="submit" name="signup"  value="Registrarse" >
              <div class="clear"> </div>
              </div>
            </form>
          </div>
        </div>
      </div>		
      <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
        <div class="facts">
          <div class="login">
            <form name="login" action="" method="post">
              <input type="text" class="text" name="uemail" value="" placeholder="Ingresa tu correo"  ><a href="#" class=" icon email"></a>
              <input type="password" value="" name="password" placeholder="Ingresa una contraseña"><a href="#" class=" icon lock"></a>
              <div class="submit two">
                <input type="submit" name="login" value="Ingresar" >
              </div>
              <div class="clear"> </div>
            </form>
          </div>
        </div> 
      </div> 			        					 
        <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
          <div class="facts">
            <div class="login">
              <form name="login" action="" method="post">
                <input type="text" class="text" name="femail" value="" placeholder="En construccion" required  ><a href="#" class=" icon email"></a>
                <div class="submit three">
                  <input type="submit" name="send" onClick="myFunction()" value="Enviar correo">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

</div>
</body>
</html>