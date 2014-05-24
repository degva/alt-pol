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


	function disappearFront() {
		$('#welcomer').toggle('blind');
		$('#bubbles').fadeOut('fast');
		$('.bub img.big-btn').fadeOut('fast');
		$('#-menu-inicio').removeClass('active');
		setTimeout(function() {
			// $('.bub').css({'height': '60px','width': '60px','margin-left': '162px'});
			$('.bub').addClass('bub-old');
			$('.bub small').fadeOut('fast');
			$('.bub img.small-btn').fadeIn('fast');
			// $('#bubbles').css({'height': '80px', 'margin-bottom': '15px', 'padding-top': '10px', 'background-color': 'rgba(1,158,203,0.3)'});
			$('#bubbles').addClass('bubbles-out');
			$('#bubbles').fadeIn('slow');
		}, 200);
	}

	function appearFront() {
		$('.context').toggle('blind');
		$('#bubbles').fadeOut('fast');
		$('#bubbles').removeClass('bubbles-out');
		$('.bub img.small-btn').fadeOut('fast');
		$('.bub small').fadeIn('fast');
		$('.bub').removeClass('bub-old');
		$('#-menu-inicio').addClass('active');
		$('.bub img.big-btn').fadeIn('fast');
		$('#bubbles').fadeIn('slow');
		$('#welcomer').toggle('blind');
		
	}

	// Luego, si el hash cambia repentinamente D:
	$(window).bind('hashchange', function() {
		var newHash = window.location.hash;
		console.log('DEBUG: Hash ha cambiado! D:');
		console.log('DEBUG: Y es: ' + newHash);
		// Entonces primero desaparesco init :d
		if ((newHash == '' || newHash == '#home') && lastHash != '') {
			appearFront();
		} else if (newHash == '#industrial') {
			disappearFront();
			$('#industrial').toggle('blind');
		}
		lastHash = newHash;
	});

});
