<?php
session_start();
?>


<?php
if(!(isset($_SESSION['mail']))){
	echo "<script>
	alert('Please login before visitting this page');
	window.location=('index.html');
	</script>";
}
else{
	echo"
<!DOCTYPE html>
<html lang='en-Us'>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Quiz Management System</title>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>
	<script src='js/jquery-3.2.1.min.js'></script>
	<script src='js/script.js'></script>
<style>
.breadcrumb{
	height:600px;
}
.panel-heading{
margin-left:-3%;
margin-right:-3%;
padding-bottom:0%;
}
.well{min-width:300px;}
.panel{
overflow:hidden;
min-width:300px;
}
.bold{color:black;
font-style:bold;
font-weight:600;}
</style>
	</head>
	<body>";
echo"<div class='row'>
			<div class='container'>
			<div class='breadcrumb'>
				<h1>Welcome to our portal</h1>
			<hr>
			<center>
		<div class='panel panel-info col-md-8 col-lg-8 col-sm-8 col-xs-12'>
		<div id='db' class='panel-heading'style='margin-top:0%'>
		<div class='progress'style='margin-top:0%'>
			<div id='status' class='progress-bar progress-bar-primary progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='margin-top:0%'>
			</div>
			<span id='status_text'class='sr-only'> </span>
			</div>
		</div>
		<div class='panel-body' style='width:auto;min-height:content;'style='margin-top:0%'><p id='qsn'style='margin-top:10%' ></p>
		<ul class='list-group col-md-12'><br/>
		<li class='list-group-item col-md-6 btn btn-default' id='choose1'>  </li>
		<li class='list-group-item col-md-6 btn btn-default' id='choose2'>  </li>
		<li class='list-group-item col-md-6 btn btn-default' id='choose3'>  </li>
		<li class='list-group-item col-md-6 btn btn-default' id='choose4'>  </li>
		</ul>
		</div>
		
		<div class='btn btn-primary btn-sm' id='previous'>Previous</div>
		<div class='btn btn-primary btn-sm' id='next'>Next</div>
		
		
		</div>
		<div class='well pull-right col-md-4 col-lg-4 col-sm-4 col-xs-12' id='well' style='opacity:0;'>
			<h3>Result</h3>
			<table>
			<tr><td>Number Of Questions:</td><td class='bold' id='max_question'></td></tr>
			<tr><td>Answered Correctly:</td><td class='bold' id='correct'></td></tr>
			<tr><td>Percentage:</td><td class='bold'  id='percent'></td></tr>
			<tr><td id='ski' >Questions Skipped:</td><td class='bold' id='skip'></td></tr>
			
			</table>
		</div>
		</center>
<dialog id='dialog'></dialog>
<div class='btn btn-warning btn-sm pull-right'><a href='signout.php' style='color:white;text-decoration:none;'>Sign Out</a></div>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
		 <script src='js/bootstrap.min.js'></script>
</body>



</html>";
}
?>