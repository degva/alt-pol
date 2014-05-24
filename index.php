<?php
	$pagenum = 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
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
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/800x300"> <!-- alt='...' -->
      <div class="carousel-caption">
				<h3>Foto 1</h3>
				<p>Comentario para foto 1</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x300"> <!-- alt='...' -->
      <div class="carousel-caption">
				<h3>Foto 2</h3>
				<p>Comentario para foto 2</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x300"> <!-- alt='...' -->
      <div class="carousel-caption">
				<h3>Foto 3</h3>
				<p>Comentario para foto 3</p>
      </div>
    </div>
  </div>

	<!-- Controls -->
	<!-- 
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	-->
</div>
				<!-- END CAROUSEL -->

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. </p>
				</div> <!-- /#welcomer -->
				<div id='bubbles' class='center width-pri'>
					<div class='bub' target='industrial' onclick="document.location.href = '#industrial'">
						<img class='big-btn' src='http://placehold.it/200x200'>
						<img class='small-btn' src='http://placehold.it/50x50x'>
						<small class='center'>Linea Industrial</small>
					</div>
					<div class='bub' target='publicitaria' onclick="document.location.href = '#publicitaria'">
						<img class='big-btn' src='http://placehold.it/200x200'>
						<img class='small-btn' src='http://placehold.it/50x50x'>
						<small class='center'>Linea Publicitaria</small>
					</div>
					<div class='bub' target='decorativa' onclick="document.location.href = '#decorativa'">
						<img class='big-btn' src='http://placehold.it/200x200'>
						<img class='small-btn' src='http://placehold.it/50x50x'>
						<small class='center'>Linea Decorativa</small>
					</div>
				</div>
			</div>
			<!-- END INIT -->
			<div id='industrial' class='context center width-pri'>
				<h2 class='center'>Linea Industrial</h2>	
				<div class='width8 center'>
					<p>
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu odio eget magna hendrerit egestas. Integer dolor purus, volutpat vel metus vitae, semper ultricies nisl. Donec ultricies vestibulum arcu in commodo. Morbi nec nisl eget justo luctus feugiat nec eget mi. Proin fermentum enim sit amet turpis tempor, vel consequat augue dapibus. In quis erat porta, consectetur erat eu, commodo dui. Morbi ac odio vitae nulla fringilla luctus vel ut eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum urna et orci imperdiet fringilla. Nulla quis turpis fermentum orci vestibulum scelerisque. 
					</p>
				</div>

				<div class='width-pri center portafolio'>
					<h3>Portafolio</h3>
					<div class='fotos center width8'>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Uno</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Dos</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Tres</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Cuatro</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Cinco</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Seis</small>
						</div>
						<div class='foto-porta left'>
							<img src='http://placehold.it/150x150' />
							<small class='center'>Foto Siete</small>
						</div>
					</div>
				</div> <!-- /.portafolio -->

				<div class='width-pri center clientes'>
					<h3>Clientes</h3>	
					<p class='width8 center'>
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu odio eget magna hendrerit egestas. Integer dolor purus, volutpat vel metus vitae, semper ultricies nisl. D
					</p>
					<div class='width8 center cli-list'>
						<ul>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
						</ul>
						<ul>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
							<li>Qwerty</li>
						</ul>
					</div>
				</div> <!-- /.clientes -->


			</div>
			<div id='footer' class='width-pri'>
				Altopolimero | 2014 | Todos los derechos reservados			
			</div>
		</div>
	</body>
	<!-- <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script> -->
	<script src='js/movements.js'></script> 
	<script src="js/bootstrap.min.js"></script>
</html>
