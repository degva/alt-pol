<!DOCTYPE html>
<html>
	<head>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<title>ALTOPOLIMERO</title>
	</head>
	<body>
		<div class='principal'>
			<div id='bien' class='center width-pri bienv'>
				<div class='center img-cont'>
					<h2 class='center'>Bienvenido a</h2>
					<img id='logo-prin' src='img/logo-2d.png' />
				</div>
			</div>
			<div id='aaa'>
			<!-- START MENU -->
			<?php include 'includes/menu.php' ?>
			<!-- END MENU -->
			<!-- START INIT -->
			<br />
			<div id='init' class='center width-pri'>
				<h4 class='center width-pri'>Una empresa dedicada a las necesidades del cliente</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. </p>
				<div id='bubbles' class='center width-pri'>
					<div class='bub' target='industrial' onclick="document.location.href = '#industrial'">
						<img src='http://placehold.it/200x200'>
						<small class='center'>Linea Industrial</small>
					</div>
					<div class='bub' target='publicitaria' onclick="document.location.href = '#publicitaria'">
						<img src='http://placehold.it/200x200'>
						<small class='center'>Linea Publicitaria</small>
					</div>
					<div class='bub' target='decorativa' onclick="document.location.href = '#decorativa'">
						<img src='http://placehold.it/200x200'>
						<small class='center'>Linea Decorativa</small>
					</div>
				</div>
			</div>
			<!-- END INIT -->
		</div>
	</body>
	<script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src='js/movements.js'></script> 
</html>
