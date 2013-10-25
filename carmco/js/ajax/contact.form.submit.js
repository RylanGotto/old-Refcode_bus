$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A name will give us something to call you!",
				email: "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  A real email will help us hit you back.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('bin/send.contact.mail.php', $("#myform").serialize(), function(data) {
			$('input[type="text"]').val(''), $('#results').html(data), $('#myform').fadeOut('slow'), $('.message').val(''),$('#myform').fadeIn('slow') ;
				});
			}
		});
	});
	
