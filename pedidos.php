<!DOCTYPE html>
<html lang="es">
<?php
	session_start();
	include_once 'data_base/database.php';
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/oficial.css?v=<?php echo time(); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Custom HoodBoyz</title>
</head>

<body>
	<!--NAVBAR/-->
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="img/logo.jpg" width="100">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="pagdmin.php">Inicio</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Titulo/-->
	<div id="titulo" class="container-fluid">
		<div id="msg" class="container w-50 ps-5">
			<div class="row align-items-center">
				<div class="col-sm p-4 text-light text-center">
					<h1>Pedidos</h1>
				</div>
			</div>
		</div>
	</div>

	<!--fondo tabla-->
	<div id="adm" class="container-fluid">
		<div class="cuadro container-md p-5">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Cod_pedido</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">Telefono</th>
						<th scope="col">Correo</th>
						<th scope="col">Region</th>
						<th scope="col">Ciudad</th>
						<th scope="col">Comuna</th>
						<th scope="col">Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql= "SELECT * FROM pedido";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($row=$result->fetch_assoc()){
							echo sprintf(
								'
								<tr>
									<th scope="row">%s</th>
									<td>%s</td>
									<td>%s</td>
									<td>%s</td>
									<td>%s</td>
									<td>%s</td>
									<td>%s</td>
									<td>%s</td>
									<td>
										<div class="btn-group btn-group-sm" role="group">
											<a class="btn btn-secondary btn-sm" href="modificar.php?id=%s"><i class="bi bi-pencil"></i></a>
											<a class="btn btn-danger btn-sm" href="borrarpedido.php?id=%s"><i class="bi bi-x-circle"></i></a>
										</div>
									</td>
								</tr>

								',
								$row["cod_pedido"],
								$row["Nombre"],
								$row["Apellido"],
								$row["Telefono"],
								$row["Correo"],
								$row["Region"],
								$row["Ciudad"],
								$row["Comuna"],
								$row["cod_pedido"],
								$row["cod_pedido"]
							);
						}
					}
					?>					
				</tbody>
			</table>
		</div>
	</div>

	<!--separador/-->
	<div id="separador2">
		<div class="content bg-dark"></div>
	</div>

	<!--Footer/-->
	<footer id="pie-pag">
		<div class="container-md p-5">
			<div id="pie" class="row pt-2">
				<div class="t col">
					<div class="row">
						<div class="redes row pt-2">
							<h3 id="contactos" class="s">Contactos:</h3>
							<ul>
								<li><i class="bi bi-instagram"></i></li>
								<li><i class="bi bi-whatsapp"></i></li>
								<li><i class="bi bi-discord"></i></a></li>
								<li><i class="bi bi-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="row pt-2">
						<h3 class="s">Productos</h3>
						<ul>
							<li><a class="pie-li" href="#">Zapatillas</a></li>
							<li><a class="pie-li" href="#">Poleras</a></li>
							<li><a class="pie-li" href="#">Gorros</a></li>
						</ul>
					</div>
				</div>
				<div class="col">
					<h3 class="s">Asistencia</h3>
					<ul>
						<li><a class="pie-li" href="#">¿Necesitas ayuda?</a></li>
						<li><a class="pie-li" href="#">Servicio al cliente</a></li>
						<li><a class="pie-li" href="#">Preguntas frecuentes</a></li>
						<li><a class="pie-li" href="#">Productos</a></li>
						<li><a class="pie-li" href="#">Pedidos</a></li>
						<li><a class="pie-li" href="#">Pago</a></li>
						<li><a class="pie-li" href="#">Envio</a></li>
						<li><a class="pie-li" href="#">Devoluciones</a></li>
						<li><a class="pie-li" href="#">Como usar nuestro sitio</a></li>
					</ul>
				</div>
				<div class="col">
					<h3 class="s">Terminos y Condiciones</h3>
					<ul>
						<li><a class="pie-li" href="#">Terminos y Condiciones</a></li>
						<li><a class="pie-li" href="#">Politica de Privacidad</a></li>
						<li><a class="pie-li" href="#">Terminos y Condiciones de uso del sitio</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="bs/js/popper.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
</body>

</html>