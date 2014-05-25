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
				$('#industrial').fadeIn('blind');
				if($('#industrial').has('div.loader').length) {
					retrievePage('industrial');
				}
			}, 1000);
		} else if (the_hash == '#publicitaria') {
			console.log('Comenzando con publicitaria');
			disappearFront();
			setTimeout(function() {
				$('#publicitaria').fadeIn('blind');
				if($('#publicitaria').has('div.loader').length) {
					retrievePage('publicitaria');
				}
			}, 1000);
		} else if (the_hash == '#decorativa') {
			console.log('Comenzando con decorativa');
			disappearFront();
			setTimeout(function() {
				$('#decorativa').fadeIn('blind');
				if($('#decorativa').has('div.loader').length) {
					retrievePage('decorativa');
				}
			}, 1000);
		}
		lastHash = the_hash;
	}

	function retrievePage(page) {
		url_ready = 'includes/' + page + '.php';
		console.log('retrieving page!');
		$.ajax({
			type: 'post',
			url: url_ready,
			success: function(e) {
				setTimeout(function() {
					$('#'+page).fadeOut('slow');;
					setTimeout(function() {
						$('#'+page).html(e);
						$('#'+page).fadeIn('slow');;
					}, 500);
				}, 500);
			}
		});
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
			$('.bub h4.small-btn').fadeIn('fast');
			//$('.bub img.small-btn').fadeIn('fast');
			// $('#bubbles').css({'height': '80px', 'margin-bottom': '15px', 'padding-top': '10px', 'background-color': 'rgba(1,158,203,0.3)'});
			$('#bubbles').addClass('bubbles-out');
			$('#bubbles').fadeIn('slow');
		}, 200);
	}

	function appearFront() {
		console.log('DEBUG: appearFront()');
		$('.context').fadeOut('fast');
		$('#bubbles').fadeOut('fast');
		$('.bub h4.small-btn').fadeOut('fast');
		//$('.bub img.small-btn').fadeOut('fast');
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

	function moveTo(theTo) {
			console.log('Moving to' + theTo);
			if (lastHash == '' || lastHash == '#home') {
				disappearFront();
			} else {
				$('.context').fadeOut('fast');
			}
			$('#' + theTo).toggle('blind');
			if($('#'+theTo).has('div.loader').length) {
				retrievePage(theTo);
			}
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
			moveTo('industrial');
		} else if (newHash == '#publicitaria' && lastHash != '#publicitaria') {
			moveTo('publicitaria');
		} else if (newHash == '#decorativa' && lastHash != '#decorativa') {
			moveTo('decorativa');
		}

		lastHash = newHash;
	});

});
