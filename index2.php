<!DOCTYPE html>
<html>
	<head>
		<link href='css/main2.css' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div id='loader-box'>
			<div class="loader">Loading...</div>
		</div>

		<div id='welcomer'>
			<div>
				<img id='toplogo' src='http://placehold.it/350x200'>
				<!-- <p>Y aqui van otras cosas D:<br> -->
				<br><a id='closeW' href='#inicio'>ENTRAR</a>
			</div>
			<div id='newWelc' style="margin: 0px auto; height: 80%; width: 250px; top: -15%;">
				<img src="http://placehold.it/50x50" style="float:left;">
				<h2 style="margin: 0px auto; padding-top: 5%;">ALTOPOLIMERO</h2>
			</div>
		</div> <!-- /#welcomer -->

		<div id='inicio'>
			<div id='init'>
				<h4>Una empresa dedicada a las necesidades del cliente</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. </p>
				<div id='bubbles'>
					<div class='bub' target='industrial' onclick="document.location.href = '#industrial'">
						<img src='http://placehold.it/200x200'>
						<small>Linea Industrial</small>
					</div>
					<div class='bub' target='publicitaria' onclick="document.location.href = '#publicitaria'">
						<img src='http://placehold.it/200x200'>
						<small>Linea Publicitaria</small>
					</div>
					<div class='bub' target='decorativa' onclick="document.location.href = '#decorativa'">
						<img src='http://placehold.it/200x200'>
						<small>Linea Decorativa</small>
					</div>
				</div>
			</div>
		</div> <!-- /#inicio -->

		<div id='cuerpo'>
			<div id='descriptions'>
			<div id='industrial' onclick="document.location.href = '#industrial'">
				<div class='cont'>
					<img class='bigbub' src='http://placehold.it/500x500'>
					<div class='context'>
						<h3>Linea Industrial</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
							Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
							Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
						</p>
						<div class='buttons'>
							<button value='gale'>Galeria</button>
							<button value='clien'>Clientes</button>
							<button value='contact'>Contactenos</button>
						</div> <!-- /.buttons -->
					</div> <!-- /.context -->
				</div> <!-- /.cont -->
				<div class='gale'>
					<div class='content'>
						<h3>Galeria</h3>		
						<button alt='Regresar' class='closeBtt'>X</button>
					</div>
				</div>
			</div> <!-- /#industrial -->

			<div id='publicitaria' onclick="document.location.href = '#publicitaria'">
				<div class='cont hide'>
					<img class='bigbub' src='http://placehold.it/500x500'>
					<div class='context'>
						<h3>Linea Publicitaria</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
							Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
							Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
						</p>
						<div class='buttons'>
							<button class='' value='gale'>Galeria</button>
							<button class='' value='clien'>Clientes</button>
							<button class='' value='contact'>Contactenos</button>
						</div> <!-- /.buttons -->
					</div> <!-- /.context -->
				</div> <!-- /.cont -->
			</div> <!-- /#publicitaria -->

			<div id='decorativa' onclick="document.location.href = '#decorativa'">
				<div class='cont hide'>
					<img class='bigbub' src='http://placehold.it/500x500'>
					<div class='context'>
						<h3>Linea Decorativa</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
								Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
								Duis mattis sit amet massa quis suscipit. Etiam libero sapien, facilisis in. 
							</p>
						<div class='buttons'>
							<button class='' value='gale'>Galeria</button>
							<button class='' value='clien'>Clientes</button>
							<button class='' value='contact'>Contactenos</button>
						</div> <!-- /.buttons -->
					</div> <!-- /.context -->
				</div> <!-- /.cont -->
			</div> <!-- /#decorativa -->
		</div> <!-- /#desciptions -->
		</div> <!-- /#cuerpo -->



	</body>
	<script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src='js/main2.js'></script>
</html>
