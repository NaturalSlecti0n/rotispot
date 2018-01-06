<?php session_start();
 //REV UP THOSE SESSIONS
if (!isset($_SESSION['user_name'])) //cant access without being logged in
{
    print '<script>window.location.assign("managerlogin.php");</script>';
		die;
}?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>The Roti Spot </title>
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<link rel="stylesheet" type="text/css" href="../modifyStyle.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="jumbotron" style = "background-color: yellow;">
			<div class="container text-center" style = "background-color: yellow;">
				<h1>The Roti Spot</h1>
				<p>Time to manage the management!</p>
			</div>
		</div>

		<nav class="navbar navbar-inverse" style = "background-color: #ABEBC6; margin-bottom: 0;">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class = "navbar-brand" href="#"><img src="../images/store-icon.png" alt="Lo GOL" style="width:50px;height:30px;"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">


				<ul class="nav navbar-nav navbar-inverse">
					<li><a href="managerindex.php" style = "background-color: #ABEBC6; color: black;"><span class="glyphicon glyphicon-user" style = "color: black;"></span> My account</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					    <li><a href="managerlogout.php" style = "color: black;"><span class="glyphicon glyphicon-off" style = "color:red;"></span> Logout</a></li>
					    </ul>
				</div>
			</div>
		</nav>
	</body>
</html>
