<?php
	$type = $_POST['page'];
	
	if ($type == 'ind') {
		include 'ind-fotos-arr.php';
	} else if ($type == 'dec') {
		include 'dec-fotos-arr.php';
	} else if ($type == 'pub') {
		include 'pub-fotos-arr.php';
	}
	foreach ($fotos["fotos"] as $value) {
?>
		<div id='<?php echo $value; ?>' class='foto-porta left' data-toggle='modal' data-target='#fotoModal'>
			<img src='<?php echo $fotos[$value]["data"]; ?>' />
			<small class='center'><?php echo $fotos[$value]["info"] ?></small>
		</div>

<?php
	}

?>
