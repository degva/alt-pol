$(document).ready(function() {
	console.log('THIS IS WORKING!');
	$.ajax({
		type: 'post',
		url: 'includes/retrieve-porta.php',
		data: {page: 'ind'},
		success: function(e) {
			$('#ind-fotos div').fadeOut('fast');
			$('#ind-fotos').html(e);
			$('#ind-fotos .foto-porta').fadeIn('fast');
		}
	});
});
