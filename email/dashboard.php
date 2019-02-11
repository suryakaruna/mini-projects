<?php
session_start();
?>


<?php

/*if(!(isset($_SESSION['email']))){
	echo "<script>
	alert('Please login before visitting this page');
	window.location=('index.html');
	</script>";
}
else{*/
$tmp=$_SESSION['email'];
$conn = new mysqli('localhost','root','','mail');
$sql="select * from message";
$result = $conn->query($sql);
$test=false;

	echo"
<!DOCTYPE html>
<html lang='en-Us'>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>E-mail Client System</title>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>
	<script src='js/jquery-3.2.1.min.js'></script>

<style>.row{min-height:700px;}

th,td{padding:10px;}
</style>
	</head>
	<body>";
echo"<div class='row jumbotron bg-info'>
			<div class='container '>
			<h2 class='text-center'>E-mail Client System</h2>
			<div class='progress' style='margin-left:-10%;margin-right:-10%;'></div>
			<ul class='nav nav-tabs nav-justified'>
			<li class='active' ><a href='#create' data-toggle='tab'>Create Mail</a></li>
			<li><a href='#sent' data-toggle='tab'>Sent Mails</a></li><br>
			</ul>
<div class='tab-content'>
<div class='tab-pane active' id='create'>
		<form action='mail.php' method='POST'>
		<div class='form-grp '>
		<label>To: </label> <input type='text' class='form-control' name='to'>
		</div><br>

		<div class='form-grp'>
		<label >Subject: </label> <input type='text' class='form-control' name='subject'>
		</div><br>
		
		<div class='form-grp'>
		<label >Message: </label> <textarea type='textarea' class='form-control' rows='6' name='message'></textarea>
		</div>	<br>


		<div class='form-grp'><br/>
		<button class='btn btn-success btn-md pull-left' type='submit' style='padding-left:3%;padding-right:3%;margin-left:1%' value='submit'>Send</button>
		</div>
	</form>

<small class='pull-right text-danger'>Not : $tmp</small><br/><div class='btn btn-warning btn-sm pull-right'><a href='signout.php' style='color:white;text-decoration:none;'>Sign Out</a></div></footer>

</div>

<div class='tab-pane' id='sent'>
	<br>
<div class='row'>
	<table class='container table table-striped' width='100%'>
	<caption class='text-center'>	<h2>Sent Mails </h2> </caption>
	<tr>
	<th class='col-md-2 col-xs-2 col-lg-2 col-sm-2'>To Mail</th>
	<th class='col-md-2 col-xs-2 col-lg-2 col-sm-2'>Subject</th>
	<th class='col-md-6 col-xs-6 col-sm-6 col-lg-6 text-justified'>Message</th>
	<th class='col-md-2 col-xs-2 col-lg-2 col-sm-2'>Sent on</th>
	</tr>";
	while($row=$result->fetch_assoc()){
	$test=true;
	$to=$row['mail_to'];
	$subject=$row['subject'];
	$hd=$row['header'];
	$message=$row['message'];
	$sent=$row['submit'];
echo "<tr><td>".$to." </td><td>".$subject." </td><td>".$message." </td><td>".$sent." </td></tr>";
}
echo"
</div>
</div>
</div>
<div class='breadcrumb'>
<small class='text-danger pull-mid'>Not : $tmp</small>
<div class='btn btn-danger btn-xs pull-right'><a href='signout.php' style='color:white;text-decoration:none;'>Sign Out</a></div>
</div>
</div>
</div>



<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
		 <script src='js/bootstrap.min.js'></script>

</body>



</html>";
//}
?>
