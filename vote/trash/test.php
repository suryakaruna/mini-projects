<?php
$otp=rand(1000,9999).rand(1000,9999);
$salt='8dC_9Kl?';
$otp1=md5('f9269e816c576e398c52ab4754e884bd');


echo"$otp1 & ".gettype($otp1)."";
?>