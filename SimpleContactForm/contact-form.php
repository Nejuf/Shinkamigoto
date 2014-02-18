

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Contact Form</title>
	<style type="text/css">
		/* BASIC STYLES */
		body{font-family: 'Lucida Grande',Trebuchet, Tahoma, sans-serif;color:#222;font-size:11px;}
		fieldset{margin:0;padding:0;border:0;}
		label{width:250px; display:block;}
		.txt_input{width:250px; display:block;}
		textarea{height:80px; width:250px;}
		input{display:block;}
		.req{color:#f00;font-size:90%;}
		#form_errors{color:#f00; display:none;}
		#form_thanks{color:#000; display:none;}
	</style>

	<script type="text/javascript" src="contact-form.js"></script>
	<?php 
		if($_GET['sent']){ echo "<script type=\"text/javascript\">window.onload = function(){showThanks(thanks_message);}</script>"; }
	?>
	</head>
<body>
<div id="container">
<div class="contact">
				
		<fieldset style="float:left;">
		<p id="form_errors"></p>
		<p id="form_thanks"></p>
		<form name="contact" action="form.contact-form.php" method="post" onsubmit="return validateForm();">
		<input type="hidden" name="form_page" value="<?=$_SERVER['PHP_SELF']?>" />


		<label>Your E-Mail <span class="req">*</span></label>
		<input type="text" class="txt_input" name="sender_email" />

		<label>Subject <span class="req">*</span></label>
		<input type="text" class="txt_input" name="sender_subject" />

		<label>Message <span class="req">*</span></label>
		<textarea name="sender_message"></textarea>

		<input type="submit" name="submitForm" value="Submit" />
		</form>
		</fieldset>
	</div>
	
	
</div>
</body>
</html>
