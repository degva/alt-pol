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

	});

	function elaborate(a,b) {
		if ($(a).children().is(':hidden')) {
			$(a).children().toggle('slow');
		}
		$(a).animate({width: b}, 700);
		$(a).addClass('notop');
		$(a).find('.tag').addClass('rotate');
	}

	$('.ind').on('click', function() {
			if ($(this).hasClass('notop')) {
				elaborate('.pub', '5%');
				elaborate('.dec', '4.7%');
				elaborate('.ind', '90%');
				$(this).addClass('op');
				$(this).removeClass('notop');
			}
			$(this).find('.tag').removeClass('rotate');
	});
	$('.pub').on('click', function() {
			if ($(this).hasClass('notop')) {
				elaborate('.ind', '5%');
				elaborate('.dec', '4.7%');
				elaborate('.pub', '90%');
				$(this).addClass('op');
				$(this).removeClass('notop');
			}
			$(this).find('.tag').removeClass('rotate');
	});
	$('.dec').on('click', function() {
			if ($(this).hasClass('notop')) {
				elaborate('.pub', '5%');
				elaborate('.ind', '4.7%');
				elaborate('.dec', '90%');
				$(this).addClass('op');
				$(this).removeClass('notop');
			}
			$(this).find('.tag').removeClass('rotate');
	});

});
