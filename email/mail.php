<?php session_start();?>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

	</head>

	<body>

<?php


$to=$_REQUEST['to'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$from=$_SESSION['email'];
$header="From: $from";
$body="This an automated email from blankpagers \n\n $message";
if(mail($to,$subject,$message,$header))
echo"sent!!!";
else
header("Location:dashboard.php");
/*
if(!isset($_SESSION['email'])){
	echo "<script>
			window.location.href='index.html';
		</script>";
}


else{
	$conn = new mysqli('localhost','root','','mail');
	$sql1="insert into message(mail_to,subject,header,message,submit) values('$to','$subject','$header','$message',NOW());";
	$result = $conn->query($sql1);
	mail($to,$subject,$message,$header);
	echo "<script>
	alert('Mail Successfully Sent!')
	</script>";
	echo "<script>window.location.href='dashboard.php'</script>";

}

mysqli_close($conn);*/
?>
<script src="js/bootstrap.js" rel="javascript" type="text/js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
