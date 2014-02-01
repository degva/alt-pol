$( document ).ready(function() {

	$('#closeW').on('click', function() {
		// console.log('clicked');
		$('#welcomer').animate({height: '30%'}, 700);
		$('#welcomer div').animate({top: '0%'}, 700);
		// $('#welcomer div img').animate({height: '90%'}, 700);
		$('#closeW').fadeOut();
		// $('#toplogo').attr('src', 'http://placehold.it/250x150')
	});

	$('.bub').on('click', function() {
		var $target = $(this).attr('target');
		if ($target == 'industrial') {
			console.log('me voy a industrial');
		} else if ($target == 'publicitaria') {
			console.log('me voy a publicitaria');
		} else if ($target == 'decorativa') {
			console.log('me voy a decorativa');
		}

		$('#welcomer').animate({height: '10%'}, 700);
		$('#toplogo').toggle('slow');
		$('#inicio').toggle('slow');
		$('#cuerpo').toggle('slow');


		// Cambiar img por logo
		var $newwelc = '<div style="margin: 0px auto; height: 80%; width: 250px; top: -15%;"><img src="http://placehold.it/50x50" style="float:left;"><h2 style="margin: 0px auto; padding-top: 5%;">ALTOPOLIMERO</h2></div>'
		
		$('#welcomer').append($newwelc);

	});

	function elaborate(a,b) {
		$(a).find('.tag').removeClass('hide');
		$(a).find('.cont').addClass('hide');
		$(a).animate({width: b}, 700);
	}

	$('#industrial').on('click', function() {
			console.log('moving to industrial');
			if ($(this).find('.cont').hasClass('hide')) {
				elaborate('#publicitaria', '5%');
				elaborate('#decorativa', '4.7%');
				$(this).animate({width: '90%'}, 700);
				$(this).find('.tag').addClass('hide');
				$(this).find('.cont').removeClass('hide');
			}
			//$(this).find('.tag').removeClass('rotate');
	});
	$('#publicitaria').on('click', function() {
			if ($(this).find('.cont').hasClass('hide')) {
				elaborate('#industrial', '5%');
				elaborate('#decorativa', '4.7%');
				$(this).animate({width: '90%'}, 700);
				$(this).find('.tag').addClass('hide');
				$(this).find('.cont').removeClass('hide');
			}
			//$(this).find('.tag').removeClass('rotate');
	});
	$('#decorativa').on('click', function() {
			if ($(this).find('.cont').hasClass('hide')) {
				elaborate('#publicitaria', '5%');
				elaborate('#industrial', '4.7%');
				$(this).animate({width: '90%'}, 700);
				$(this).find('.tag').addClass('hide');
				$(this).find('.cont').removeClass('hide');
			}
			//$(this).find('.tag').removeClass('rotate');
	});

});
