<?php 
session_start();
 
$jsec=$_REQUEST['jsec'];
$treasure=$_REQUEST['treasure'];
$name=$_REQUEST['name'];

require('db.php');
$sql="select * from member";
$result = $conn->query($sql);
$test=false;
while($row=$result->fetch_assoc()){
if($name == $row['name'] && $name==$_SESSION['user']){
	$test=true;
	$sql2="update member set join_sec='$jsec',treasurer='$treasure',vote=NOW() where name='$name'";
	$res2 = $conn->query($sql2);
		
	}
}
if($test==true){	
	
	echo "<script>
		alert('You are Done!');
		window.location.href='result.php';
		</script>";
	
}

else
{
	echo "<script>
	alert('Something went wrong! please Try Again')
	</script>";
	echo "<script>window.location.href='index.php'</script>";
		
}

mysqli_close($conn);
unset($_SESSION['user']);
?>

