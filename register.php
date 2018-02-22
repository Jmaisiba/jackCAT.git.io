<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
</head>
<body style="text-align: center; background-image: url(img/reg1.gif); background-size: 100%;">
	<div class="container jumbotron well-lgb">
		<form style="font-family: courier new">
			<h3><strong>SIGN UP SHEET</strong></h3>

			<h5  "><strong>ENTER NEEDED DETAILS</strong></h5>
	<label class="well well-lg"  >
		First Name    <span class="glyphicon glyphicon-user"> </span><input class="form-control" type="text" name="fname" placeholder="First Name" required="">
		</label> 
		<label class="well well-lg">
		Last Name   <span class="glyphicon glyphicon-user"> </span><input class="form-control"  type="text" name="lname" placeholder="Last Name" required="">
		</label><br>
		
			<label class="well well-lg">
				Username <span class="glyphicon glyphicon-user"></span><input class="form-control" type="username" name="usn" placeholder="Username" required="">
			</label>
			<label class="well well-lg">
		Email  <span class="glyphicon glyphicon-envelope"> </span><input class="form-control"  type="email" name="email" placeholder="Email Address" required="">
		</label><br>
		<label class="well well-lg">
		Phone #   <span class="glyphicon glyphicon-earphone"> </span><input class="form-control"  type="text" name="pno" placeholder="(+254)700000000" required="">
		</label><br>	
		<label class="well well-lg">
			password <input class="form-control" type="password" name="pwd" placeholder="Password" required="">
			 <?php 
				 $key=$_GET['pwd'];
				 if(strlen($key)<8){
				 	echo "<strong>Password is Too Short!!!</strong>";
				 }else{
				 	echo "";
				 }

	  			?>
	  			
		</label>
		<label class="well well-lg">
			password <input class="form-control" type="password" name="psd" placeholder="Confirm Password " required="">
			<?php 
	 $pass1=$_GET['pwd'];
	  $pass2=$_GET['psd'];
	  if ($pass1===$pass2) {
	  	echo "";
	  	# code...
	  }
	  else{
	  	echo "<strong>Passwords do not match!!!!!</strong>";
	  }



	  ?>
		</label><br>
		<label>
		<button class="form-control btn btn-success"><a href="home.php">Submit</a></button>
		</label>
		<label>
			<input class="form-control btn btn-danger" type="reset" name="reset" value="reset">
		</label>
</form>
	</div>

</body>
</html>