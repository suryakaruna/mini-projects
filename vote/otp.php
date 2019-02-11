<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function send($usr,$otp){

$mail = new PHPMailer(true);                              

    $mail->SMTPDebug = 2;                           
    $mail->isSMTP();                                
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;                         
    $mail->Username = 'itprojecttemp@gmail.com';    
    $mail->Password = 'passworderror';              
    $mail->SMTPSecure = 'ssl';                      
    $mail->Port = 465;//587;                              

    //Recipients
    $mail->setFrom('itprojecttemp@gmail.com.com', '3rd_IT');
    $mail->addAddress($usr);    
    $mail->addReplyTo('itprojecttemp@gmail.com', 'Blankpagers');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$bdy="<p> Here is the OTP for your login this will valid upto 15 mins, No more than one OTP is generated for a person.</p><br><span>OTP: <b>".$otp."</b></span>";
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'OTP for Login';
    $mail->Body = $bdy;
    //$mail->AltBody = 'Here is the OTP for your login this will valid upto 15 mins, No more than one OTP is generated for a person.\nOTP:<b>01234567';

   if($mail->send())
	   return true;
   else
	   return false;
}
function check($mail,$name){
require('db.php');
$sql="select * from member";
$result = $conn->query($sql);
$test=false;
while($row=$result->fetch_assoc()){
if($mail == $row['email'] || $name==$row['name'])
{
	$test=true;
}
}
if($test==true){
mysqli_close($conn);
	return true;
}

}

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
if(check($email,$name)){
		echo"<script>
	window.location.href='index.php';
	</script>";
}else{
if($name==null){
	echo "<script>
	
		alert('Enter the name');
		window.location.href='index.php';
		</script>";
}
else if($email==null){
	echo "<script>
		alert('Enter the E-mail');
		window.location.href='index.php';
		</script>";
}
else{
$tmp=rand(1000,9999).rand(1000,9999);
$salt = "8dC_9Kl?";
$otp=md5($tmp.$salt);
if(send($email,$tmp)){
require('db.php');
$sql="INSERT INTO member(name, otp, email, submit) VALUES ('$name','$otp','$email',NOW())";
$result = $conn->query($sql);

if($result)
{	
	
	echo "<script>
		alert('OTP Sent to: $email');
		window.location.href='index.php';
		</script>";
	
}

else
{
	echo "<script>
	alert('Something went wrong! Try Again');
	</script>";
	echo "<script>window.location.href='index.php'</script>";
		
}

}
}

mysqli_close($conn);

}


?>
