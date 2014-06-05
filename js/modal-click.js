$(document).ready(function() {
	$(document).on('click','.foto-porta',function() {
		var this_id = $(this).attr('id');
		var context = $(this).children('small').text();

		console.log('DEBUG: Reciviendo informacion extra para foto: ' + this_id);
		console.log('DEBUG: Tiene titulo: ' + context);

		$.ajax({
			type: 'post',
			url: 'includes/retrieve-modal-inf.php',
			data: {pic_id: this_id},
			success: function(e) {
				$('#modal-foto-title').text(context);
				$('#modal-carousel-cont').html(e);
				// $('#modal-carousel-cont').parent().find('.loader').fadeOut('fast');
				$('#modal-carousel-cont').fadeIn('fast');
				$('#modal-carousel').carousel();
			}
		});
	});

	$(document).on('click','#modal-close',function() {
		$('#modal-carousel-cont').fadeOut('fast');
		$('#modal-carousel-cont').html('');
		// $('#modal-carousel-cont').parent().find('.loader').fadeIn('fast');
	});
});
