<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ajax login Demo</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.js"></script>
	</head>
	<body>
	<script type="text/javascript">
		$(function() {
  $("#submit_login").click(function() {
	var username = $("input#username").val();
	if (username == "") {
	   $('.errormess').html('Please Insert Your Username');	
       return false;
    }
	var password = $("input#password").val();
	if (password == "") {
	   $('.errormess').html('Please Insert Your Password');	
       return false;
    }
	var dataString = 'user='+ username + '&pass=' + password;
	$.ajax({
      type: "POST",
      url: 'login_action.php',
      data: dataString,
	  dataType: "html",
      success: function(data) {
	  if (data == 0) {
	  $('.errormess').html('Wrong Login Data');
		} else {
			$('.errormess').html('<b style="color:green;">you are logged. wait for redirection</b>');	
			document.location.href = '../room/index.php';	
		}
      }
     });
    return false;
	});
});
	</script>
	<div class="login_form">
	<h3>Login</h3>
	<form method="POST">
	<label>Username</label>
	<input type="text" name="username" id="username" placeholder="your username" /><br />
	<label>Password</label>
	<input type="password" name="password" id="password" placeholder="your password" /><br />
	<input type="submit" id="submit_login" name="submit" class="inputbutton grey" value="Login" />
	<span class="login_loading"></span>
	<span class="errormess"></span>
	</form>
	</div>
	
	</body>
</html>