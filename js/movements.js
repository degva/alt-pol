$(document).ready(function() {

	// Aparece el menu luego de 1.5 segundos
	setTimeout(function() {
		// Sacamos el mensaje de bienvenido
		$('#bien').fadeOut('slow');
	}, 1500);

	setTimeout(function() {
		// Y sacamos el #aaa
		$('#aaa').fadeIn('slow');
	}, 2000);
});
