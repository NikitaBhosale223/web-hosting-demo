<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			background-image: url(img2.jpg);
			background-size: cover;
  			background-repeat: no-repeat;
  			  

		}
		table
		{
			margin-top: 150px;
			border: 2px #09647B;
			padding: 50px;
			text-align: center;
			border-radius: 15px;
			background-color: white;
			box-shadow: 12px 12px 12px ;
			
		}
		th
		{
			font-size: 25px;
			padding-bottom: 10px;
		}
		td
		{
			padding: 10px;
		}
		tr
		{
			height: 30px;
		}
		input
		{
			font-size: 15px;
			padding-left: 10px;
		}
	
	</style>
	
    
</head>

<body>
<form name="myform" action="login.php" method="post">
<table align="center">
	<tr><th><u>Login</u></th></tr>
	<tr><td><input type="text" id="Password" name="Password" placeholder="Password" style='height: 30px'></td></tr>
	<tr><td><input type="Confirm password" id="Confirm password" name="Confirm password" placeholder="Confirm Password" style='height: 30px'></td></tr>
	<tr><td><input type="submit" value="Save" name="Save" onclick="log()" style='background-color: #16DEE5 ; width: 200px; height: 40px; font-size: 20px; color: white'></td></tr>

	<!--<tr><td><a href="forgetpass.php" style="color: red">Forget Password?</a></td></tr>
	<tr><td><a href="registerform.php">Register here</a></td></tr>-->
</table>
</form>
</body>
</html>