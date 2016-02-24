<?php header("content-type: application/x-javascript"); ?>
$(document).ready(function() {
	
	$("form#contact_form").submit(function(form) {
			
						var Nama = $(':text[name=name]').val();
						if (Nama=="")
						{
							alert ('Please Enter Your Full Name!');
							$(':text[name=name]').focus();
							return false;
						}
						var Email = $(':text[name=email]').val();
						if (Email=="") {
							alert ('Please Enter Your Email!');
							$(':text[name=email]').focus();
							return false;
						}
						var Message = $('textarea[name=message]').val();
						
						if (Message=="") {
							alert ('Please Enter Your Message!');
							$('textarea[name=message]').focus();
							return false;
						}
						if (!Email.match(/^[\w\.-]+@(?:[A-Za-z0-9-]+\.)*[A-Za-z0-9-]{1,}\.[a-z]{2,9}$/))
						{
							alert ('Please Enter Valid Email!');
							$(':text[name=email]').focus();
							return false;
						}
						
						$.ajax({
							type: "POST",
							url: "<?php $url=$_GET['url']; echo $url; ?>",
							cache: false,
							
							data: 'action=sendemail&name='+ Nama +'&email=' + Email +'&message=' + Message,

							
							beforeSend: function() {
								
								$(".response").css("display", "block");
								$(".response").html("Processing Sending Message<br/>");
								$("#contact_form").css("display", "none");
								setTimeout('$(".response").fadeIn("fast")',4000);
								
							},
							success: function(html){
								
								$(".response").fadeIn("fast");
								html = html.substr(0,html.length-3); // remove wp_admin adder (-1 or 0)
								$(".response").html(html);
								setTimeout('$(".response").fadeOut("fast").hide()',4000);				$("#contact_form").css("display", "block");
								
								return false;
							},
							error : function() {
								$(".response").fadeIn("fast");
								$(".response").html("Failed to be sent. There is error in the admin url");
										setTimeout('$(".response").fadeOut("fast").hide()',4000);
										$("#contact_form").css("display", "block");
							
								return false;
							}
						});
			
		
		return false;
	});	
	
});