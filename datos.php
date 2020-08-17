<?php

session_start();

$varsesion = $_SESSION['login'];

if ($varsesion == null || $varsesion = '') {
	echo  'Usted no tiene autorizacion';
	die();
}

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="stylesheet" href="estilos/estilosDatos.css">
	<link href="css/bootstrap.css" media="all" rel="stylesheet">
	<title>Datos de</title>
	<script>
		function actualizarDatos() {
			alert("Datos actualizados exitosamente");
			document.location.href = 'menuprincipal.php'
		}
	</script>
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
				<!-- ** Informacion** -->
				<div class="row container justify-content-around">
					<row class=" col-12">
						<h1 class="titulo-principal">Datos actuales</h1>
					</row>
					<row class=" col-7">
						<input class="form-control" type="number" name="peso" id="peso" size="3" maxlength="4" placeholder="Peso">
						<input class="form-control" type="number" name="altura" id="altura" size="3" maxlength="3" placeholder="Altura">
						<input class="form-control" type="number" name="edad" id="edad" size="3" maxlength="3" placeholder="Edad">
						<input class="btn btn-primary" type="button" value="Actualizar datos" onclick="location.href='?actualizarDatos'">
						<input class="btn btn-primary" type="button" value="Mostrar datos" onclick="location.href='?mostrarDatos'">

						<?php
						$sessionid = session_id();
						$sessionname = session_name();
						echo "session id: " + $session_id;
						echo "session name: " + $sessionname;
						include_once("cruddatos.php");
						$fila = mostrarDatos();
						if (isset($_GET['mostrarDatos'])) foreach ($fila as 	$persona) { ?>
							<td><?php echo $persona->getid() ?></td>
							<td><?php echo $persona->getPeso() ?></td>
							<td><?php echo $persona->getAltura() ?></td>
							<td><?php echo $persona->getEdad() ?></td>
							<td><?php echo $persona->getNombre() ?></td>
							<td><?php echo $persona->getApellido() ?></td>
						<?php } ?>
					</row>

					<!-- Modal -->
					<div class="modal fade" id="Imc" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="height: 700px">
								<div class="modal-header bg-dark">
									<h3 class="modal-title text-center" id="ModalLabel">Resultados del calculo del IMC</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="calcularIMC()">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body " style="height: 400px">
									<row>
										<div class="col-12 h-10">
											<p> Ingreso de datos:
												<input class="text-center" type="text" name="imc" id="imc" maxlength="4" </p> </div> <div class="col-12 h-90">
												<input class="w-100 h-50" type="text" name="info" id="info">
												<img class="w-100 h-50" src="img/IMC.png" />
												<!--image-->
										</div>
									</row>
								</div>

								<div class="modal-footer bg-dark">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap CSS -->
	<script src="js/jquery/jquery-3.4.1.min.js"></script>
	<script src="js/jquery/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>