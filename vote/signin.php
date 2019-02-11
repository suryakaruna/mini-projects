<?php 
session_start();
 $salt = "8dC_9Kl?";
$name=$_REQUEST['usr1'];
$pass=$_REQUEST['pass1'];

if($name==null){
	echo "<script>
	
		alert('Enter the valid email');
		window.location.href='index.php';
		</script>";
}
else if($pass==null){
	echo "<script>
		alert('Invalid Credential: OTP');
		window.location.href='index.php';
		</script>";
}
else{
require('db.php');
$sql="select * from member";
$result = $conn->query($sql);
$test=false;
while($row=$result->fetch_assoc()){
if($name == $row['email'] && md5($pass.$salt) == $row['otp']){
		
	$_SESSION["user"]=$row['name'];
		$test=true;
}
}
if($test==true && isset($_SESSION['user'])){	
	
	echo "<script>
		alert('Successfully Signed In');
		window.location.href='dashboard.php';
		</script>";
	
}

else
{
	echo "<script>
	alert('Email and OTP does not match')
	</script>";
	echo "<script>window.location.href='index.php'</script>";
		
}
}
mysqli_close($conn);

?>

 