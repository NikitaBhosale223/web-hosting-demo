<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);



if (isset($_POST['Login'])) {
	$uname=$_POST['username'];
	$pass=$_POST['password'];

$query="select username, password from employee where username='$uname' and password='$pass'";

$result=mysqli_query($conn,$query);


while($row=(mysqli_fetch_array($result)))
    {
        
        $newuname= $row['username'];
        $newpass= $row['password'];
       
  
	if ($newuname==$uname) {
		if ($newpass==$pass) {

			echo "<h1>Login successfully...</h1>";

		}
		else{
			echo "<h1>incorrect password...please try again</h1>";
		}

	}
	   else{
		echo "<h1>incorrect username...please try again</h1>";
	}


}

}


?>
<h1><a href="login.php"> Back </a></h1>
</body>
</html>