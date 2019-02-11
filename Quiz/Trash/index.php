<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz Management System</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<script>	
function next() {/*
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { */
        var q = new int();
		q=1;
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","script.php?q="+q,true);
        xmlhttp.send();
		q++;
    //}
}
</script>	
		
<?php

$conn = new mysqli("localhost","root","","quiz");


if ($conn->connect_error) {
      die("<div class='alert alert-danger alert-dismissable fade in'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<b>Connection Failed</b> ".$conn->connect_error."</div>");
		
} 
echo "<div class='alert alert-success alert-dismissable fade in'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<b>Connected</b> successfully</div>";

$q = 1;

$sql = "SELECT * FROM qsn where ID = $q";

$query = $conn->query($sql);



if ($query->num_rows > 0) {
     while($row = $query->fetch_assoc()) {
        $q=$row["QUESTION"];
		$op1=$row["OPTION_1"];
		$op2=$row["OPTION_2"];
		$op3=$row["OPTION_3"];
		$op4=$row["OPTION_4"];
		
    }
} else {
    echo "0 querys";
}
$conn->close();

echo "<div class='row'>
			<div class='container'>
			<div class='breadcrumb'>
				<h1>Welcome to our portal</h1>
			</div>
		<div class='panel panel-info col-md-8'>
		<div id='db' class='panel-heading'>
		<div class='progress'>
			<div id='status' class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:10%'>
			<span class='sr-only'>70% Complete</span>
			</div>
			</div>
		</div>
		<div class='panel-body'>".$q."
		<ul class='list-group col-md-12'><br/>
		<li class='list-group-item col-md-6 btn btn-default'>".$op1 ."</li>
		<li class='list-group-item col-md-6 btn btn-default'>".$op2 ."</li>
		<li class='list-group-item col-md-6 btn btn-default'>".$op3 ."</li>
		<li class='list-group-item col-md-6 btn btn-default'>".$op4 ."</li>
		</ul>
		</div>
		
		<div class='btn btn-primary btn-sm' value='1' onclick='previous()'>Previous</div>
		<div class='btn btn-primary btn-sm'  onclick='next()'>Next</div>
		
		
		</div>";
?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
</body>
</html>