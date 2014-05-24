$(document).ready(function() {

	// Esto es para saber el hash actual
	var lastHash = window.location.hash;

	// Aparece el menu luego de 1.5 segundos
	setTimeout(function() {
		// Sacamos el mensaje de bienvenido
		$('#bien').fadeOut('slow');
	}, 1500);

	// En caso de que exista un hash dentro de la pagina:
	if (window.location.hash) {
		console.log('DEBUG: Encontre un hash! D:');
		the_hash = window.location.hash;
		console.log('Y es ' + the_hash + ' D:');
	}

	setTimeout(function() {
		// Y sacamos el #aaa
		$('#aaa').fadeIn('slow');
	}, 2000);


	// Luego, si el hash cambia repentinamente D:
	$(window).bind('hashchange', function() {
		var newHash = window.location.hash;
		console.log('DEBUG: Hash ha cambiado! D:');
		console.log('DEBUG: Y es: ' + newHash);
	});

});
