$( document ).ready(function() {

	// Algunas variables globales
	var $now = 0;
	var _old = 0;

	// Welcomer actual
	var $actWel = "<div><img id='toplogo' src='http://placehold.it/350x200'><!-- <p>Y aqui van otras cosas D:<br> --><br><a id='closeW' href='#'>ENTRAR</a></div>";

	$('#closeW').on('click', function() {
		// console.log('clicked');
		$('#welcomer').animate({height: '200px'}, 700);
		$('#welcomer div').animate({top: '0%'}, 700);
		// $('#welcomer div img').animate({height: '90%'}, 700);
		$('#closeW').fadeOut();
		// $('#toplogo').attr('src', 'http://placehold.it/250x150')
		$now = 1;
		_old = 0;
	});

	// Funcion para regresar un $now
	function goBackOne(e) {
		if (e = 1) {
			console.log('Regresando a #inicio');
			$('#welcomer').animate({height: '200px'}, 700);
			$('#newWelc').fadeOut('slow');
			$('#cuerpo').fadeOut('slow');
			$('#toplogo').fadeIn('slow');
			$('#inicio').fadeIn('slow');
			$now = 1;
		}
	}

	// En caso el usuario le de click al boton de regreso
	// window.onbeforeunload = goBackOne();
	$(window).on('hashchange', function() {
		console.log('Actual hash: ' + location.hash);
		if (location.hash == '#inicio') {	
			if ($now != 1) {
				goBackOne(1);
				console.log('$now ' + $now);
			} else {
				console.log('No pasa nada, estamos en el mismo lugar');
			}
		} else if (location.hash == '#industrial') {
			if ($now == 1) {
				console.log('-- Linea 45: Ejecutar goInd()');
				goToLine();
				goInd($('#industrial'));
				$now = 2;
				console.log('$now ' + $now);
			} else if ($now == 2){
				if ($('#industrial').find('.cont').hasClass('hide')) {
					goInd($('#industrial'));
				}
			}
		} else if (location.hash == '#publicitaria') {
			if ($now == 1) {
				console.log('-- Linea 57: Ejecutar goDec()');
				goToLine();
				goPub($('#publicitaria'));
				$now = 2;
				console.log('$now ' + $now);
			} else if ($now == 2) {
				if ($('#publicitaria').find('.cont').hasClass('hide')) {
					goPub($('#publicitaria'));
				}
			}
		} else if (location.hash == '#decorativa') {
			if ($now == 1) {
				console.log('-- Linea 67: Ejecutar goDec()');
				goToLine();
				goDec($('#decorativa'));
				$now = 2;
				console.log('$now ' + $now);
			} else if ($now == 2) {
				if ($('#decorativa').find('.cont').hasClass('hide')) {
					goDec($('#decorativa'));
				}
			}
		}
	});

	function goToLine() {
		$('#welcomer').animate({height: '100px'}, 700);
		$('#toplogo').fadeOut('slow');
		$('#inicio').fadeOut('slow');
		$('#cuerpo').fadeIn('slow');
		$('#newWelc').fadeIn('slow');
	}

	function elaborate(a,b) {
		$(a).find('.tag').removeClass('hide');
		$(a).find('.cont').addClass('hide');
		$(a).animate({width: b}, 700);
	}

	function goInd(e) {
		elaborate('#publicitaria', '80px');
		elaborate('#decorativa', '80px');
		$(e).animate({width: '1000px'}, 700);
		$(e).find('.tag').addClass('hide');
		$(e).find('.cont').removeClass('hide');
	}

	function goPub(e) {
		elaborate('#industrial', '80px');
		elaborate('#decorativa', '80px');
		$(e).animate({width: '1000px'}, 700);
		$(e).find('.tag').addClass('hide');
		$(e).find('.cont').removeClass('hide');
	}

	function goDec(e) {
		elaborate('#publicitaria', '80px');
		elaborate('#industrial', '80px');
		$(e).animate({width: '1000px'}, 700);
		$(e).find('.tag').addClass('hide');
		$(e).find('.cont').removeClass('hide');
	}
	/* 
	$('#industrial').on('click', function() {
		if ($(this).find('.cont').hasClass('hide')) {
			goInd($(this));
		}
	});
	$('#publicitaria').on('click', function() {
		if ($(this).find('.cont').hasClass('hide')) {
			goPub($(this));
		}
	});
	$('#decorativa').on('click', function() {
		if ($(this).find('.cont').hasClass('hide')) {
			goDec($(this));
		}
	});
	*/
	$('button[value=gale]').on('click', function() {
		var $gale = $(this).parent().parent().parent().parent().find('.gale')
		var $actdis = $gale.css('display');
		console.log('Actual Display: ' + $actdis);
		if ($actdis == 'block') {
			$gale.fadeOut('slow');
			$('#industrial').find('.cont').fadeIn('slow');
		} else {
			$gale.fadeIn('slow');
			$('#industrial').find('.cont').fadeOut('slow');
		}
	});

	$('button.closeBtt').on('click', function() {
		var $cont = $(this).parent().parent().parent().find('.cont');
		$cont.fadeIn('slow');
		$('#industrial').find('.gale').fadeOut('slow');
	});

});
