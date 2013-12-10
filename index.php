<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="altopolimero-icon.png">

    <title>ALTOPOLIMERO</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

			<?php include "includes/header.php"; ?>



      <!-- Begin page content -->
			<div class="container" style="padding-top: 100px">
				<div class="row" style="width: 900px; margin: auto">
				<!-- A carousel here! -->
				<div id="carousel-example-generic" class="carousel slide span10" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="http://placehold.it/900x500" alt="CAP1">
				      <div class="carousel-caption">
 	    			  	<h3>This is a Caption for CAP1</h3>
								<p>And this is the description cap1</p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="http://placehold.it/900x500" alt="CAP2">
				      <div class="carousel-caption">
 	    			  	<h3>This is a Caption for CAP2</h3>
								<p>And this is the description cap2</p>
				      </div>
				    </div>
				  </div>

		  		<!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div> <!-- End of carousel -->
				</div>

				<div class="page-header">
          <h1>Bienvenido</h1>
        </div>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added within <code>#wrap</code> with <code>padding-top: 60px;</code> on the <code>.container</code>.</p>
        <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script> -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/main-alt.js"></script>
  </body>
</html>

