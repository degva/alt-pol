<!DOCTYPE html>
<html>
	<head>
		<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<link href='css/menu.css' rel='stylesheet' type='text/css'>
		<link href='css/content.css' rel='stylesheet' type='text/css'>
		<title>ALTOPOLIMERO</title>
	</head>
	<body>
		<?php include "includes/menu.php"; ?>
		<div class='content'>
			<div class='hr' ></div>

      <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
				
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-captions" data-slide-to="1"></li>
          <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="http://placehold.it/800x350" alt="Y aqui va una foto">
            <div class="carousel-caption">
              <h3>Esta es una primera foto</h3>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/800x350" alt="800x500">
            <div class="carousel-caption">
              <h3>Y, aqui una segunda</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/800x350" alt="800x500">
            <div class="carousel-caption">
              <h3>Y esta es la tercerda :D</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>

				<!-- 
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
				-->
			
      </div>
			<p>Test</p>    

		</div>
	</body>
	<?php include "includes/stylesscripts.php"; ?>
	<script src='js/bootstrap.min.js'></script>
</html>

