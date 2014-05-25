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
					<div class='bub bub-old-ind' target='industrial' onclick="document.location.href = '#industrial'">
						<img class='big-btn' src='http://placehold.it/200x200'>
						<!-- <img class='small-btn' src='http://placehold.it/50x50x'> -->
						<h4 class='small-btn'>Industrial</h4>
						<small class='center'>Linea Industrial</small>
					</div>
					<div class='bub bub-old-pub' target='publicitaria' onclick="document.location.href = '#publicitaria'">
						<img class='big-btn' src='http://placehold.it/200x200'>
						<!-- <img class='small-btn' src='http://placehold.it/50x50'> -->
						<h4 class='small-btn'>Publicitaria</h4>
						<small class='center'>Linea Publicitaria</small>
					</div>
					<div class='bub bub-old-dec' target='decorativa' onclick="document.location.href = '#decorativa'">
						<img class='big-btn' src='http://placehold.it/200x200'>
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

			<!-- MODAL PARA FOTOS -->
<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
				<div class="loader">Loading...</div>
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
	<script src="js/bootstrap.min.js"></script>
</html>
