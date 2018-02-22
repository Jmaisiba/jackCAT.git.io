<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
</head>
<body style="text-align: center; background-image: url(img/login2.gif)"; background-size: 100%;">
	<div class="container well well-lgb">
		
	
	<div  class="close1" >

<form method="GET">
	<label>
		Username:
		<input class="form-control" type="username" name="usn" placeholder="Username" required="">
	</label><br>
<label>
	Input Password:
	<input class="form-control" type="password" name="psd" placeholder="Password" required="">
</label><br>
<label>
	<input class="form-control btn btn-success" type="submit" name="sbm" onclick="window.open('home.php')">
</label><br>

<label>
	<center><a href="register.php">Don't have an account?</a></center>
</label>


</form>
</div>
</div>
</body>
</html>