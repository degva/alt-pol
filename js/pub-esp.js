$(document).ready(function() {
	console.log('THIS IS WORKING!');
	$.ajax({
		type: 'post',
		url: 'includes/retrieve-porta.php',
		data: {page: 'pub'},
		success: function(e) {
			$('#pub-fotos div').fadeOut('fast');
			$('#pub-fotos').html(e);
			$('#pub-fotos .foto-porta').fadeIn('fast');
		}
	});
});
