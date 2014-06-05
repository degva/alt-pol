<?php
	$pic_id = $_POST['pic_id'];

	$type = substr($pic_id, 0, 1);
	echo "<!-- El tipo es |$type| -->";
	if ($type == 'i') {
		include 'ind-fotos-arr.php';
	} else if ($type == 'd') {
		include 'dec-fotos-arr.php';
	} else if ($type == 'p') {
		include 'pub-fotos-arr.php';
	}
?>
	<div id="modal-carousel" class="carousel slide" data-ride="carousel" style='width: 700px; position: relative; margin: 0 auto;'>
		<!-- Indicators -->
		<ol class="carousel-indicators">
<?php
	$active = 0;
	foreach ($fotos[$pic_id]['fotosExtras'] as $val) {
		if ($active == 0) {
?>
			<li data-target="#modal-carousel" data-slide-to="0" class="active"></li>
<?php
		$active = 1;
		} else {
?>
			<li data-target="#modal-carousel" data-slide-to="<?php echo $active; ?>"></li>
<?php
			$active = $active + 1;
		}
	}
?>
		</ol>

	 <!-- Wrapper for slides -->
		<div class="carousel-inner">
<?php
	$active = 0;
	foreach ($fotos[$pic_id]['fotosExtras'] as $val) {
		if ($active == 0) {
?>
			<div class="item active">
				<img src="<?php echo $val; ?>"> <!-- alt='...' -->
			</div>

<?php
		$active = 1;
		} else {
?>
			<div class="item">
				<img src="<?php echo $val; ?>"> <!-- alt='...' -->
			</div>

<?php
		}
	}
?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#modal-carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#modal-carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	<!-- END CAROUSEL-->
	<div>
		<h3><?php echo $fotos[$pic_id]['info']; ?></h3>
		<p><?php echo $fotos[$pic_id]['descrip']; ?></p>
	</div>

