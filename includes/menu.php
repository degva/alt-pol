			<div id='menu' class='center width-pri'>
				<img id='logo-sec' src='img/logo-2d.png' />
				<div id='social-network'>
					<p>Compartir</p>
					<div id='facebook'><i class="fa fa-facebook-square"></i><a class='rs'>Facebook</a></div>
					<div id='youtube'><i class="fa fa-twitter-square"></i><a class='rs'>Twitter</a></div>
					<!-- 
					<div id='telf'><i class="fa fa-phone-square"></i><a class='rs'>+51 (01) 251 0209</a></div>
					<div id='email'><i class="fa fa-envelope"></i><a class='rs' href='mailto:altopolimero.ger@gmail.com'>altopolimero.ger@gmail.com</a></div>
					-->
				</div>
				<div id='sub-menu-1' class='right width8'>
<?php
	if ($pagenum == 1) {
?>
					<a id='-menu-inicio' class='sub-menu-opt active' href='#home'>Inicio</a>
<?php
	} else {
?>
					<a id='-menu-inicio' class='sub-menu-opt' href='#home'>Inicio</a>
<?php
	}
?>

					<a id='-menu-qsomos' class='sub-menu-opt' href='#quienes-somos'>Quienes Somos</a>
					<a id='-menu-contac' class='sub-menu-opt' href='#contacto'>Contactenos</a>
				</div>
			</div>
