$(document).ready(function() {
	//console.log('THIS IS WORKING!');
	$.ajax({
		type: 'post',
		url: 'includes/retrieve-porta.php',
		data: {page: 'dec'},
		success: function(e) {
			$('#dec-fotos div').fadeOut('fast');
			$('#dec-fotos').html(e);
			$('#dec-fotos .foto-porta').fadeIn('fast');
		}
	});
});
