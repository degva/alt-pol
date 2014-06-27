<?php
	$pagenum = 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<link type="image/x-icon" href="img/logo.ico" rel="Shortcut Icon">
		<meta charset="utf-8"> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title>ALTOPOLIMERO</title>

		<!-- Jquery Stuff -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

	</head>
	<body>
		<div class='principal'>
			<div id='bien' class='center width-pri bienv'>
				<div class='center img-cont'>
					<h2 class='center'>Bienvenido a</h2>
					<img id='logo-prin' src='img/logo-2d.png' />
				</div>
			</div>
			<div id='aaa' class='center width-pri'>
			<!-- START MENU -->
			<?php include 'includes/menu.php' ?>
			<!-- END MENU -->
			<!-- START INIT -->
			<br />
			<div id='init' class='center width-pri'>
				<div id='welcomer'>
				<h3 class='center width-pri'>Una empresa dedicada a las necesidades del cliente</h3>
				<br />

				<!-- CAROUSEL -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

		<div class="item active">
			<img src="img/init/001.jpg"> <!-- alt='...' -->
			<div class="carousel-caption">
				<h3>Celdas Electrolíticas</h3>
				<p>Celdas de concreto reforzadas con fibra de vidrio antiácido</p>
			</div>
		</div>
		<div class="item">
			<img src="img/init/002.jpg"> <!-- alt='...' -->
			<div class="carousel-caption">
				<h3>Taxi Checker</h3>
				<p>Clasico Taxi NewYorkino hecho en fibra de vidrio</p>
			</div>
		</div>
		<div class="item">
			<img src="img/init/003.jpg"> <!-- alt='...' -->
			<div class="carousel-caption">
				<h3>Clarificadores</h3>
				<p>Hechos en fibra de vidrio antiácida</p>
			</div>
		</div>
		<div class="item">
			<img src="img/init/004.jpg"> <!-- alt='...' -->
			<div class="carousel-caption">
				<h3>Dummie 3D - Pulp</h3>
				<p>Montado sobre una camioneta</p>
			</div>
		</div>
		<div class="item">
			<img src="img/init/005.jpg"> <!-- alt='...' -->
			<div class="carousel-caption">
				<h3>Dummie 3D - Furby</h3>
				<p>Con movimientos mecanizados controlados por placas electrónicas</p>
			</div>
		</div>

	</div>
</div>
				<!-- END CAROUSEL -->
				<br />
				<h3 class='center width-pri'>Somos una empresa con amplia experiencia en el desarrollo e implementación<br> de proyectos para la industria.</h3>
				<p class='center width-pri'>
					<br>
					Nuestra empresa, Altopolimero, ha dividido sus servicios en tres lineas específicas: <br> Industrial, Publicitaria y Decorativa. <br>
					Visite nuestro portafolio por cada categoría mostrada abajo.
				</p>
				<br />
				</div> <!-- /#welcomer -->
				<div id='bubbles' class='center width-pri'>
					<div class='bub bub-old-ind' target='industrial' onclick="document.location.href = '#industrial'">
						<p class='small-context'>
							<b>Linea Industrial</b>
						</p>
						<img class='big-btn' src='img/bub/ind.jpg'>
						<!-- <img class='small-btn' src='http://placehold.it/50x50x'> -->
						<h4 class='small-btn'>Industrial</h4>
						<small class='center'>Linea Industrial</small>
					</div>
					<div class='bub bub-old-pub' target='publicitaria' onclick="document.location.href = '#publicitaria'">
						<p class='small-context'>
							<b>Linea Publicitaria</b> 
						</p>
						<img class='big-btn' src='img/bub/pub.jpg'>
						<!-- <img class='small-btn' src='http://placehold.it/50x50'> -->
						<h4 class='small-btn'>Publicitaria</h4>
						<small class='center'>Linea Publicitaria</small>
					</div>
					<div class='bub bub-old-dec' target='decorativa' onclick="document.location.href = '#decorativa'">
						<p class='small-context'>
							<b>Linea Decorativa</b>
						</p>
						<img class='big-btn' src='img/bub/dec.jpg'>
						<!-- <img class='small-btn' src='http://placehold.it/50x50'> -->
						<h4 class='small-btn'>Decorativa</h4>
						<small class='center'>Linea Decorativa</small>
					</div>
				</div>
			</div>
			<!-- END INIT -->

			<!-- INDUSTRIAL -->
			<div id='industrial' class='context center width-pri'>
				<div class="loader">Loading...</div>
			</div>
			<!-- /INDUSTRIAL -->

			<!-- DECORATIVA -->
			<div id='decorativa' class='context center width-pri'>
				<div class="loader">Loading...</div>
			</div>
			<!-- /DECORATIVA -->

			<!-- PUBLICITARIA -->
			<div id='publicitaria' class='context center width-pri'>
				<div class="loader">Loading...</div>
			</div>
			<!-- /PUBLICITARIA -->

			<!-- QUIENES SOMOS -->
			<div id='quienes-somos' class='context center width-pri'>
				<div class="loader">Loading...</div>
			</div>
			<!-- /QUIENES SOMOS -->

			<!-- CONTACTO -->
			<div id='contacto' class='context center width-pri' style='height: 700px;'>
				<div class="loader">Loading...</div>
			</div>
			<!-- /CONTACTO -->

			<!-- MODAL PARA FOTOS -->
<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button id='modal-close' type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 id='modal-foto-title' class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">

				<!-- <div class="loader">Loading...</div>	 -->
				<!-- CAROUSEL -->
				<div id='modal-carousel-cont' style='display: none'>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
			<!-- /MODAL -->

			<div id='footer' class='width-pri'>
				Altopolimero | 2014 | Todos los derechos reservados			
			</div>
		</div>
	</body>
	<!-- <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script> -->
	<script src='js/movements.js'></script> 
	<script src='js/modal-click.js'></script> 
	<script src="js/bootstrap.min.js"></script>
</html>

