<?php include 'customerheader.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link rel="stylesheet" type="text/css href="style.css">
</head>
<body>
<div class="container-fluid" style = "background-color: #ffc878;">
<h1 style="padding-left:200px">Sign Up for an account below:</h1>
<form action="signupconfirm.php" method="POST" style="width:60%; padding-left:200px">
  <div class="form-group">
    <label>First Name:</label>
    <input class="form-control" type="text" name="firstname" placeholder="First name" required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input class="form-control" type="text" name="lastname" placeholder="Last name" required>
  </div>
  
  <div class="form-group">
    <label>Phone Number:</label>
    <input class="form-control" type="phone" name="phonenumber" placeholder="###-###-####" required>
  </div>
  
  <div class="form-group">
    <label>Email:</label>
    <input class="form-control" type="email" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label>Username:</label>
    <input class="form-control" type="text" name="username" placeholder="Username" required>
  </div>
    <div class="form-group">
    <label>Password:</label>
    <input class="form-control" name="pass" required="required" type="password" id="password">
  </div>
   <div class="form-group">
    <label>Confirm Password:</label>
    <input class="form-control" name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)">
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value != document.getElementById('password').value) {
            	input.setCustomValidity('Password Must be Matching.');
        	} else {
            	// input is valid -- reset the error message
            	input.setCustomValidity('');
        	}
    	}
     </script>
     </div>
     <button type="submit" class="btn btn-primary"/>Sign Up</button>
     </div>
 </form>
</body>