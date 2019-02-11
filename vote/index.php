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
	
	<div class="row">	
	<div class="container jumbotron">
	<h2 class="text-center">IT DEPARTMENT BALLOT</h2>
	
	<div class="progress text-right"><span style="margin-right:1%"><a href="index.php"> Home </a>/ login </span></div><br>
	
	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
		<h4>Don't Have OTP <small> generate here</small></h4>
		<form action="otp.php" method="GET">
		<div class="form-grp "><br/>
		<label>ROLL NUMBER (16IT**)</label> <input type="text" class="form-control"  required name="name" maxlength='6' minlength='6' value='16IT'>
		</div>
		<div class="form-grp">
		<label>E-mail </label> <input type="email" class="form-control"  required name="email">
		</div>
		<div class="form-grp"><br>
		<button class="btn btn-info btn-sm" type="submit" style="padding-left:19%;padding-right:18.1%;margin-left:30%;" value=" ">Get OTP</button> 
		</div>
		</form>
	</div>
	<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12" style="border:none;border-left:2px solid white;">
	
	<h4>Already Have OTP <small>login here</small></h4>
	<br><form action="signin.php" method="POST">
	
		<div class="form-grp ">
		<label>Email ID </label> <input type="text" class="form-control" id="charInput" size="25" name="usr1">
		</div>

		<div class="form-grp">
		<label >OTP </label> <input type="password" id="charIn"  class="form-control" size="25" name="pass1">
		</div>
		
	
	
	
		<div class="form-grp"><br/>
		<button class="btn btn-info  " type="submit" style="padding-left:19%;padding-right:18.1%;margin-left:30%;" value=" ">Sign In</button> 
		</div>
	</form>	
	
	</div>
	<a href='result.php'>	Check Live Result Here </a>
		
		
		
	
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
	