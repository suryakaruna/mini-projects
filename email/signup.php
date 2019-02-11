
<html> 
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	</head>

	<body>
	
<?php

 
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$cpass=$_REQUEST['cpass'];
$mob=$_REQUEST['mob'];


if($name==null){
	echo "<script>
	
		alert('Enter the Name');
		window.location.href='signup.html';
		</script>";
}
else if($pass!=$cpass){
	echo "<script>
	
		alert('Password Doesn't match');
		window.location.href='signup.html';
		</script>";
}

else{
$conn = new mysqli('localhost','root','','mail');
$sql ="select * from member";
$result = $conn->query($sql);
$test=false;
while($row=$result->fetch_assoc()){
if($name == $row['email'] && $pass == $row['pass']){
			$test=true;
}
}
if($test==true){	
	
	echo "<script>
		alert('This mail id is already exist !!!');
		window.location.href='login.html';
		</script>";
	
}
else
{	$sql1="insert into member(name,gender,dob,email,pass,mob) values('$name','$gender','$dob','$email','$pass','$mob');";
	$result = $conn->query($sql1);
	echo "<script>
	alert('Successfully created login to continue')
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
 
 