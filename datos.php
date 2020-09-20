<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="stylesheet" href="estilos/estilosDatos.css">
	<link href="css/bootstrap.css" media="all" rel="stylesheet">
	<title>Datos de Usuario</title>
	<script>
		function actualizarDatos() {
			alert("Datos actualizados exitosamente");
			document.location.href = 'menuprincipal.php'
		}
	</script>
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
					<img src="img/usr.png" /><!-- user image-->
				</div>
        
				<!-- Formulario con ingreso de datos de la persona -->

				<form name="data-update" method="post" action="renovardatos.php">
					<input class="form-control" type="number" 
            name="peso" id="peso" size="3" maxlength="4" placeholder="Peso">
					<input class="form-control" type="number" 
            name="altura" id="altura" size="3" maxlength="3" placeholder="Altura">
					<input class="form-control" type="number" 
            name="edad" id="edad" size="3" maxlength="3" placeholder="Edad">
          
					<input class="btn btn-primary" type="submit" value="Actualizar datos">
					<input class="btn btn-primary" type="button" value="Mostrar datos" onclick="location.href='?mostrarDatosPersona'">
				</form>
			</div>
	</div>
	<!-- Bootstrap CSS -->
	<script src="js/jquery/jquery-3.4.1.min.js"></script>
	<script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>