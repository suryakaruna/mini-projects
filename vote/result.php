<?php
require('db.php');
$sql="select * from member";
$result = $conn->query($sql);
$test=false;
$SRI_count=0;$DIVYA_count=0;$IRENE_count=0;$SANJAIS_count=0;$VAIJYNTHI_count=0;$SWATHI_count=0;
$RAM_count=0;$MAHEEMA_count=0;$DEEPIKA_count=0;$SANJAID_count=0;
while($row=$result->fetch_assoc()){
	if("SRI HARI S"==$row['join_sec']){
		$SRI_count++;
		$test=true;
}if("DIVYA JOSHPHIN"==$row['join_sec']){
		$DIVYA_count++;
		$test=true;
}if("IRENE JOHN UKKEN"==$row['join_sec']){
		$IRENE_count++;
		$test=true;
}if("SANJAI S"==$row['join_sec']){
		$SANJAIS_count++;
		$test=true;
}if("VAIJYNTHI S"==$row['join_sec']){
		$VAIJYNTHI_count++;
		$test=true;
}if("SWATHI R"==$row['join_sec']){
		$SWATHI_count++;
		$test=true;
		
}if("RAM NIVASH B S"==$row['treasurer']){
		$RAM_count++;
		$test=true;
}if("MAHEEMA M"==$row['treasurer']){
		$MAHEEMA_count++;
		$test=true;
}if("DEEPIKA"==$row['treasurer']){
		$DEEPIKA_count++;
		$test=true;
}if("SANJAI D"==$row['treasurer']){
		$SANJAID_count++;
		$test=true;
}
	
}
?>
<!DOCTYPE html>
<html lang='en-Us'>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>IT DEPARTMENT BALLOT</title>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>
	<script src='js/jquery-3.2.1.min.js'></script>	
	
<body>
	<div class='row'>	
	<div class='container-fluid jumbotron' >
	<h2 class='text-center'>IT DEPARTMENT BALLOT</h2>
	
	<div class='progress text-right'><span style='margin-right:1%'><a href='index.php'> Home </a>/ Result </span></div><br>
	
	<div class='col-lg-12'>
		<h3 class='text-center'>** RESULT **</h3>
		<table class='table table-resposive table-stripped table-justify table-hover col-lg-10' style='width:80%;margin-left:10%;' onclick='reload()'>
		<caption class='text-center' style='text-transform:captialize'>JOIN SECRETARY</caption>
	<tr class='bg-info'><th>Name</th><th>Count</th></tr>
	<?php echo"	<tr><td>SRI HARI S</td><td>".$SRI_count."</td></tr>
		<tr><td>DIVYA JOSHPHIN</td><td>".$DIVYA_count."</td></tr>
		<tr><td>IRENE JOHN UKKEN</td><td>".$IRENE_count."</td></tr>
		<tr><td>SANJAI S</td><td>".$SANJAIS_count."</td></tr>
		<tr><td>VAIJYNTHI S</td><td>".$VAIJYNTHI_count."</td></tr>
		<tr><td>SWATHI R</td><td>".$SWATHI_count."</td></tr>";  ?>
			</table><br>
	</div>
	<div class='col-lg-12'>
		
		<table class='table table-resposive table-stripped table-justify table-hover col-lg-10' style='width:80%;margin-left:10%;' onclick='reload()'>
		<caption class='text-center' style='text-transform:captialize'>TREASURER</caption>
		<tr class='bg-info'><th>Name</th><th>Count</th></tr>
		<?php echo"<tr><td>RAM NIVASH B S</td><td>".$RAM_count."</td></tr>
		<tr><td>MAHEEMA M</td><td>".$MAHEEMA_count."</td></tr>
		<tr><td>DEEPIKA</td><td>".$DEEPIKA_count."</td></tr>
		<tr><td>SANJAI D</td><td>".$SANJAID_count."</td></tr>";?>
		</table>
	</div>	
	
		
	</div>
		<div class='container text-center'>
		<small>
			&copy All Rights Reserved 2018 Designed by <a href='http://blankpagers.com'>Blankpagers</a> 
		</small>
		</div>
	</div>
	<script>
		//setInterval(reload(),1000000);
		function reload(){
			location.href='result.php';
		}
	</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
		 <script src='js/bootstrap.min.js'></script>
</body>
</html>	
	