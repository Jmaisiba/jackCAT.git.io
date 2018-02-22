<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<style type="text/css"></style>
</head>
<body style="margin-top:2%;text-align: center; background-image: url(img/grade2.jpg); background-size: 100%;">
	<div class="container " >
		<form method="GET">
			<label>ENTER YOUR SCORE TO GET YOUR GRADE</label> <br>
			<label>Mathematics:<br><input class="form-control" type="text" name="mat" placeholder="enter score"></label><br>
			<label>English: <br><input class="form-control" type="text" name="eng" placeholder="enter score"></label><br>
			<label>Kiswahili: <br><input class="form-control" type="text" name="swa" placeholder="enter score"></label><br>
			<label>Biology: <br><input class="form-control" type="text" name="bio" placeholder="enter score"></label><br>
			<label>Physics: <br><input class="form-control" type="text" name="phy" placeholder="enter score"></label><br>
			<label>Chemistry:<br><input class="form-control" type="text" name="chem" placeholder="enter score"></label><br>
			<label>Computer: <br><input class="form-control" type="text" name="comp" placeholder="enter score"></label><br><br><br>
			<button class=" btn btn-success">Submit </button><br><br>

			<?php 


			$ma=$_GET['mat'];
			$en=$_GET['eng'];
			$sw=$_GET['swa'];
			$bi=$_GET['bio'];
			$ph=$_GET['phy'];
			$ch=$_GET['chem'];
			$co=$_GET['comp'];
			$value=$ma+$en+$sw+$bi+$ph+$ch+$co;
			$score=$value/7;
	 if($score>=80){
     
     echo "Y<strong> our  exactscore is " . $score . " giving you a grade of A </strong>";
	 }
	 elseif ($score>=75)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of A-</strong>";
	 }
	 elseif($score>=70)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of B+</strong>";
	 }
	 elseif($score>=65)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of B</strong>";
	 }elseif($score>=60)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of B-</strong>";
	 }
	 elseif($score>=55)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of C+</strong>";
	 }
	 elseif($score>=50)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of C</strong>";
	 }
	 elseif($score>=45)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of C-</strong>";
	 }
	 elseif($score>=40)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of D+</strong>";
	 }
	 elseif($score>=35)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of D</strong>";
	 }
	 elseif($score>=30)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of D-</strong>";
	 }
	 elseif($score>=25)
	 {
	 	echo "<strong> Your exact score is " . $score. " giving you a grade of E</strong>";
	 }
else{
	echo "<strong>FAILED MISERABLY!!!!!!!!</strong> <br> REPEAT CLASS";
}





			 ?>

		</form>
	</div>

</body>
</html>