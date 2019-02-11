<html> 
	<head>
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	</head>
	<body>
<?php

$name=$_REQUEST['usr'];
$pass=$_REQUEST['pass'];
$eml=$_REQUEST['email'];
$ph=$_REQUEST['phn'];
//if($name && $pass && $eml && $ph != NULL){
if($name==null ){
	echo "<script>
		alert('Enter the name correctly');
		window.location.href='index.html';
		</script>";		
}
else if($name =='!'||$name =='@'||$name =='#'||$name =='%'||$name =='^'||$name =='&'||$name =='*'||$name =='|'||$name =='?'||$name =='-'||$name =='_'||$name =='+'||$name =='/'||$name =='$'||$name =='.'||$name ==',')
{
	echo "<script>
		alert('Name Should not contain special characters');
		window.location.href='index.html';
		</script>";	
}
else if($pass==null )
	{
		echo "<script>
		alert('Enter the Password Correctly');
		window.location.href='index.html';
		</script>";
	}
else if($ph && $eml != null)
{
$conn = new mysqli('localhost','root','','blnk');
$sign="insert into member(u_name,u_password,u_email,u_phone) values('$name','$pass','$eml','$ph')";
if($conn->query($sign)== TRUE)
{
	echo "<script>
		alert('Successfully Signed');
		alert('Continue to login Enter your Email as Username');
	</script>";
	
	echo "<script>
		window.location.href='index.html';
		</script>";
}

else
{
echo "<script>
		alert('This mail id is already exist, Please try with different one');
	</script>";
	echo "<script>
		window.location.href='index.html';
		</script>";
		
}

}
else{
	echo "<script>
		alert('Every field should fill with appropriate data');
		window.location.href='index.html';
		</script>";
}

?>

<script src="js/bootstrap.js" rel="javascript" type="text/js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
 
 