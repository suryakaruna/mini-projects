<?php
session_start();
if(!isset($_SESSION["user"])){
	echo"<script>
	alert(' This page Required Login, Please Login Before Visiting This Page !!!');
	window.location.href='index.php';
	</script>";
}
else
	$v=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT DEPARTMENT BALLOT</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.min.js"></script>	
	
<body>
	<div class="row jumbotron">	
	<div class="container">
	<h2 class="text-center">IT DEPARTMENT BALLOT</h2>
	
	<div class="progress text-right"><span style="margin-right:1%"><a href="index.php"> Home </a>/ Dashboard </span></div><br>
	<br>
	<h4 class='text-center'>* * PLEASE READ ALL THE NAMES CAREFULLY BEFORE VOTING * *</h4>
	<br>
	
	<form action="vote.php" method="POST" class='col-lg-9' style='margin-left:12%'>
	<br>
		<div class="form-grp ">
		<label>For the position of JOIN SECRETARY</label> <input type="text" class="form-control " name="jsec" list='jlist' required>
		<datalist id='jlist'>
			<option>SRI HARI S</option>
			<option>DIVYA JOSHPHIN</option>
			<option>IRENE JOHN UKKEN</option>
			<option>SANJAI S</option>
			<option>VAIJYNTHI S</option>
			<option>SWATHI R</option>
		</datalist>
		</div>
		<br>
		<div class="form-grp ">
		<label>For the position of TREASURER </label> <input type="text" class="form-control"  size="25" name="treasure" list='tlist' required>
		<datalist id='tlist'>
			<option>RAM NIVASH B S</option>
			<option>MAHEEMA M</option>
			<option>DEEPIKA</option>
			<option>SANJAI D</option>
		</datalist>
		</div>
		<br/>
		<div class="form-grp ">
		<?php
		echo"
		<label>ROLL NUMBER (16IT**)</label> <input type='text' readonly class='form-control' name='name' maxlength='6' minlength='6' value='$v'>";
		?>
		</div>
		<br>
		<div class="form-grp">
		<label> </label> <input type="checkbox" required> Check to Confirm
		</div>
		
		
		<div class="form-grp"><br/>
		<button class="btn btn-info" type="submit" style="padding-left:19%;padding-right:18.1%;margin-left:30%;" value=" ">Vote</button> 
		</div>
	</form>	
	
	</div>
		
		
		
		
	
	</div>
		<div class='container text-center'>
		<small>
			&copy All Rights Reserved 2018 Designed by <a href='http://blankpagers.com'>Blankpagers</a> 
		</small>
		</div>
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
</body>
</html>	
	