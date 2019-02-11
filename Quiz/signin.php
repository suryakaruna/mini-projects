<?php 
session_start();
?>

<html> 
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	</head>

	<body>
	
<?php

 
$name=$_REQUEST['usr1'];
$pass=$_REQUEST['pass1'];

if($name==null){
	echo "<script>
	
		alert('Enter the user name/mail');
		window.location.href='index.html';
		</script>";
}
else if($pass==null){
	echo "<script>
		alert('Enter the password');
		window.location.href='index.html';
		</script>";
}
else{
$conn = new mysqli('localhost','root','','quiz');
$sql="select * from member";
$result = $conn->query($sql);
$test=false;
while($row=$result->fetch_assoc()){
if($name == $row['mail'] && $pass == $row['pass']){
		
	$_SESSION["mail"] = $row['mail'];
		$test=true;
}
}
if($test==true){	
	
	echo "<script>
		alert('Successfully Signed In');
		window.location.href='dashboard.php';
		</script>";
	
}

else
{
	echo "<script>
	alert('User name password does not match')
	</script>";
	echo "<script>window.location.href='index.html'</script>";
		
}
}
mysqli_close($conn);
?>
<script src="js/bootstrap.js" rel="javascript" type="text/js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
 
 