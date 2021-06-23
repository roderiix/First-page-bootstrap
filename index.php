<!DOCTYPE html>
<html lang="es">
<?php
	session_start();
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/oficial.css">
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

				<button class="navbar-toggler" 
				type="button" 
				data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toogle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item"><a class="nav-link" href="#titulo">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#zapatilla">Catalogo</a></li>
						<li class="nav-item"><a class="nav-link" href="#contactos">Contacto</a></li>
						<li class="nav-item"><a class="nav-link" href="#conocenos">Sobre</a></li>			
					</ul>
				</div>
			</div>
		</nav>		  
	<!--Pedido/-->
	<div id="signup-modal" class="modal" tabindex="-1">
		<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Pedido</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
		
				<div class="modal-body">
					<form action="crearpedido.php" method="POST">
						  
						<div class="container p-1 row">
							<input class="entrada" type="text" name="name" minlength="3" required placeholder="Ingrese su Nombre">
						</div>

						<div class="container p-1 row">
							<input class="entrada" type="text" name="apellido" minlength="3" required placeholder="Ingrese su Apellido">
						</div>

						<div class="container p-1 row">
							<input class="entrada" type="number" name="numero" required placeholder="Ingrese su Numero telefono">
						</div>

						<div class="container p-1 row">
							<input class="entrada" type="mail" name="email" required placeholder="Ingrese su Email">
						</div>

						<div class="container p-1 row">
							<input class="entrada"type="text" name="region" minlength="3" required placeholder="Ingrese su Region">
						</div>
						
						<div class="container p-1 row">
							<input class="entrada"type="text" name="ciudad" minlength="3" required placeholder="Ingrese su Ciudad">
						</div>
						
						<div class="container p-1 row">
							<input class="entrada"type="text" name="comuna" minlength="3" required placeholder="Ingrese su Comuna">
						</div>

						<div class="container p-1 row">
							<p><input name="aceptar" type="checkbox" required> Aceptar, Terminos y condiciones</p>
						</div>

						<div class="container p-1 row">
							<button type="submit" class="btn btn-primary">Pedir</button>
						</div>
					</form>
				</div>
	
				<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			  </div>
		</div>
	  </div>

	<!--Titulo/-->	
		<div id="titulo" class="container-fluid">
			<div id="msg" class="container w-50 ps-5">
				<div class="row align-items-center">
					<div class="col-sm p-4 text-light text-center">
						<h1>Bienvenidos a Custom HoodBoyz</h1>
					</div>
				</div>
			</div>
		</div>

	<!--carrousel/-->
		<div class="carousel slide" id="mainSlider" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/slide01.jpg" alt="" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="img/slide02.jpg" alt="" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="img/slide03.jpg" alt="" class="d-block w-100">
				</div>
			</div>
		</div>
	<!--separador/-->
		<div id="separador">
			<div class="content bg-dark"></div>
		</div>
	<!--zapatillas/-->
		<div id="zapatilla">
			<div class="container-md p-5">
				<!--
				<div class="catalogo row pt-5">
					<h1 class="text-center">Catalogo</h1>
				</div>
				
				<div class="subt1 row pt-5">
					<h2 class="titulo text-center">Zapatillas</h2>
				</div>
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
					  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<div class="container row pt-5">
							<div class="col">
								<div class="card card-border " style="width: 18rem;">
									<img src="img/zapatilla 6.jfif" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card card-border " style="width: 18rem;">
									<img src="img/zapatilla 6.jfif" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					<div class="carousel-item">
						<div class="row p-5">
							<div class="col-sm">
								<div class="card card-border" style="width: 18rem;">
									<img src="img/zapatilla 7.jfif" class="card-img-top pt-2" alt="...">
									<div class="card-body">
									  <h5 class="card-title">Card title</h5>
									  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="card card-border" style="width: 18rem;">
									<img src="img/zapatilla 1.jpg" class="card-img-top pt-2" alt="...">
									<div class="card-body">
									  <h5 class="card-title">Card title</h5>
									  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					

					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					  	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  	<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					  	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					  	<span class="visually-hidden">Next</span>
					</button>
				</div>-->

				
				<div class="catalogo row pt-5">
					<h1 class="text-center">Catalogo</h1>
				</div>

				<!--<div class="subt1 row pt-5">
					<h2 class="titulo">Pedido Personalizado</h2>
				</div>-->
				
				<div class="subt1 row pt-5">
					<h2 class="titulo">Zapatillas</h2>
				</div>
				<div class="row pt-5">
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/zapatilla 6.jfif" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/zapatilla 5.jfif" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/zapatilla 7.jfif" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/zapatilla 1.jpg" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						</div>
					</div>
				</div>


				<div class="subt1 row pt-5">
					<h2 class="titulo">Poleras</h2>
				</div>
				<div class="row pt-5">
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/polera WST 4.png" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						  </div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/Untitled-1.png" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						  </div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/DERRICK ROSE POELRA CUSTOMISADA.png" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						  </div>
					</div>
					<div class="col-sm">
						<div class="card card-border" style="width: 18rem;">
							<img src="img/CAMISA WESTSIDE STORY.png" class="card-img-top pt-2" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal" data-bs-target="#signup-modal">Pedir</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--separador/-->
		<div id="separador2">
			<div class="content bg-dark"></div>
		</div>
	<!--video/-->
		<div id="video">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
			  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				  	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>

				<div class="carousel-inner">
				  	<div class="carousel-item active">
						<div class="ratio ratio-16x9">
							<iframe src="video/v2.mp4" title="Custom HoodBoyz" allowfullscreen></iframe>
						</div>
				  	</div>
				  	<div class="carousel-item">
						<div class="ratio ratio-16x9">
							<iframe src="video/v1.mp4" title="Custom HoodBoyz" allowfullscreen></iframe>
						  </div>
				  	</div>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				  	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  	<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				  	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
	  		</div>
		</div>
	<!--separador/-->
		<div id="separador3">
			<div class="content bg-dark"></div>
		</div>
	<!--conocenos/-->
		<div id="conocenos">
			<div class="container-md p-5">
				<div class="sob row pt-5">
					<h1 class="text-center">Nosotros</h1>
				</div>
				<div class="sobre row pt-5 align-items-center">
					<div class="col-sm">
						<h2 class="text-center">Origenes de Custom HoodBoyz</h2>
						<p>La idea surgio a vece de la problemática de la
							zona, ya que al comprar zapatillas o ropa en la
							ciudad mas cercana , la mayoría de la gente se
							viste igual .</p>
						
							<h3 class="text-center">Por otra parte ¿ Que es HoodBoyz ?</h3>
							
						<p>Es una tienda que se dedica a customizar
							zapatillas en mal estado o crear tu estilo propio
							además, el logo refleja una historia los colores
							llamativos que están en el fondo son los
							atardeceres de la zona , la tipografía que tiene un
							efecto distorsionado es por el viento de la
							localidad , y el detalles de los zapato colgando ,
							es elreflejo q se vive en la población.</p>
						
							<h3 class="text-center">Eslogan</h3>

						<p>"talvez no tenga las mejores zapatillas pero
							marco mi propio estilo"</p>
					</div>
					<div class="col-sm">
						<img src="img/logo.jpg" alt="" width="300">
					</div>
				</div>
			</div>
		</div>
	<!--separador/-->
		<div id="separador4">
			<div class="content bg-dark">
				<div class="container"></div>
			</div>
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