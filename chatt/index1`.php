<!DOCTYPE html>

<html> 
	<head>
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--link rel="stylesheet" href="css/jquery-ui.css"-->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	</head>

	<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<div class="row"><br/>
	<div class="container col-md-5 col-lg-5 col-sm-5 col-xs-12 pull-right">
	<div class="panel panel-primary" style="margin-right:5%;">
	<div class="panel-heading">Chat Box <span id="KeyData" class="btn active pull-right"></span></div>
	<div class="panel-body" style="margin-bottom:-20px;">
	<form action="signin.php" method="POST">
	<script type="text/javascript">
	
	$("input[type=text]#charInput").keyup(function(){
		$("#KeyData").remove();
	});

	</script>
	<p >
		<div class="form-grp">
		<label>User Id </label> <input type="text" id="charInput" size="13" name="usr1"> 
	
		<div class="pull-right">
		<label >Password </label> <input type="password" id="charIn"  size="13" name="pass1">
		</div>
		</div>
	<script>
	
	function getChar(event){
	if(event.which == null){
	return String.fromCharCode(event.keyCode);
	}
	else if(event.which !=0 && event.charCode !=0){
	return String.fromCharCode(event.which);}
	
	else{ 
	return false;}
	} 
	
	document.getElementById('charInput').onkeypress = function(event){
		var char = getChar(event || window.event)
		if(!char) return false;
		else if(char){
		document.getElementById('KeyData').innerHTML = char ;
		return true;}
		else
		return false;
	}
	document.getElementById('charInput').onselect = function(event){
		var char = getChar(event || window.event)
		if(!char) return false;
		else 
		document.getElementById('KeyData').innerHTML = "Text is selected";
				
	}
		
	document.getElementById('charInput').onfocus = function(event){
		document.getElementById('KeyData').innerHTML = "Username is Selected";
	

	
	}
	document.getElementById('charIn').onfocus = function(event){
		document.getElementById('KeyData').innerHTML = "Password is Selected";
		
	}
	
	</script>
	</p>
	<p>
		<div class="form-grp"><br/>
		<button class="btn btn-info " type="submit" style="padding-left:19%;padding-right:18.1%;margin-left:30%;" value=" ">Sign In</button> 
		</div>
	</form>	
		<div class="form-grp"><br/>
			<button class="btn btn-primary " type="button" data-toggle="modal" data-target="#modal" style="padding-left:18%;padding-right:18%;margin-left:30%;" value=" ">Sign Up</button> 
		</div>
		<br/></br>
			
		<div id="modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
		<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times</button></div>
		
		<div class="modal-content">
		<form action="signup.php" method="POST">
		<div class="form-grp">
		<table >
		<tr><td><label>User Name </label> </td><td> <input type="text" name="usr" id="usr" size="25"></td></tr>
		<tr><td><label>password </label></td><td> <input type="password" name="pass" id="pass" size="25"></td></tr>
		<tr><td><label>Email </label> </td><td> <input type="email" name="email"  size="25"></td></tr>
		<tr><td><label>Phone </label> </td><td> <input type="text" name="phn" id="phn" size="25"></td></tr>
		</table>		
		<button type="submit"   class="btn btn-warning" style="padding-left:19%;padding-right:18%; margin-left:25%;margin-top:1%;"> Submit</button>
		
		</div>
		
		</div>
		</div>
		</div>
		
	</p>
	</form>
	
	</div>
	</div>
	</div>
	</div>
	<!--script src="js/jquery-ui.min.js"></script-->
	<script src="js/bootstrap.js" rel="javascript" type="text/js"></script>
	 <!--script src="js/jquery.min.js"></script-->
    
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
 
 