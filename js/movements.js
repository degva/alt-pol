$(document).ready(function() {

	// Esto es para saber el hash actual
	var lastHash = window.location.hash;

	// Aparece el menu luego de 1.5 segundos
	setTimeout(function() {
		// Sacamos el mensaje de bienvenido
		$('#bien').fadeOut('slow');
	}, 1500);

	setTimeout(function() {
		// Y sacamos el #aaa
		$('#aaa').fadeIn('slow');
	}, 2000);

	// En caso de que exista un hash dentro de la pagina:
	if (window.location.hash) {
		console.log('DEBUG: Encontre un hash! D:');
		the_hash = window.location.hash;
		console.log('Y es ' + the_hash + ' D:');

		if (the_hash == '#home' || the_hash == '') {
			console.log('Comenzando con Home');
			// $('#welcomer').toggle('fast');
		} else if (the_hash == '#industrial') {
			console.log('Comenzando con industrial');
			disappearFront();
			setTimeout(function() {
				$('#industrial').toggle('blind');
			}, 1000);
		}
		lastHash = the_hash;
	}

	function disappearFront() {
		console.log('DEBUG: disappearFront()');
		$('#welcomer').fadeOut('blind'); // toggle no parece funcionar bien .-.
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
		console.log('DEBUG: appearFront()');
		$('.context').fadeOut('fast');
		$('#bubbles').fadeOut('fast');
		$('.bub img.small-btn').fadeOut('fast');
		$('#-menu-inicio').addClass('active');
		setTimeout(function() {
		$('#bubbles').removeClass('bubbles-out');
			$('.bub').removeClass('bub-old');
			$('.bub img.big-btn').fadeIn('slow');
			$('#bubbles').fadeIn('slow');
			$('.bub small').fadeIn(1000);
			$('#welcomer').toggle('blind');
		}, 200);
		
	}

	// Luego, si el hash cambia repentinamente D:
	$(window).bind('hashchange', function() {
		var newHash = window.location.hash;
		console.log('DEBUG: Hash ha cambiado! D:');
		console.log('DEBUG: Y es: ' + newHash);
		// Entonces primero desaparesco init :d
		if ((newHash == '' || newHash == '#home') && lastHash != '') {
			console.log('Appearing Front!');
			appearFront();
		} else if (newHash == '#industrial' && lastHash != '#industrial') {
			console.log('Moving to Indutrial');
			disappearFront();
			$('#industrial').toggle('blind');
		}
		lastHash = newHash;
	});

});
