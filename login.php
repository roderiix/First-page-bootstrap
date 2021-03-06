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
					<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Titulo/-->
	<div id="titulo" class="container-fluid">
		<div id="msg" class="container w-50 ps-5">
			<div class="row align-items-center">
				<div class="col-sm p-4 text-light text-center">
					<h1>Bienvenido Administrador</h1>
				</div>
			</div>
		</div>
	</div>

	<!--fondo tabla-->
	<div id="in" class="container-fluid">
		<div class="cuadro container-md p-5">
          <form action="validar.php" method="POST">
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="usuario" placeholder="User">
                    <label for="floatingInput">User</label>
                </div>
                
                <div class="form-floating">
                    <input type="password" class="form-control" name="contrase??a" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                
                <div class="container-center p-3 row">
					<button type="submit" class="btn btn-primary">iniciar</button>
				</div>
          </form>
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
						<li><a class="pie-li" href="#">??Necesitas ayuda?</a></li>
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