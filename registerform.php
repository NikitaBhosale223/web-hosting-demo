<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function register(){
            var name=document.getElementById("name").value;
             var dbo=document.getElementById("dbo").value;
            var mblno=document.getElementById("mbl").value;
            var email=document.getElementById("email").value;
            var add=document.getElementById("Address").value;

            if(name=="" || dbo=="" || mblno=="" || email=="" || add==""){
                  
                  alert("all fields are mandetary...");
                  return false;
            }
            else{

            return true;

          }
        }
    </script>

    <style type="text/css">

        body
        {   
            background-repeat: no-repeat;
            height: 1000px;
            background-size: contain, cover;
            background-image: url(img3.jpg);
        }
        h1{
            padding-bottom: 35px;
        }
       input
        {
            font-size: 14px;
        }
    
        table{
            border: 2px;

        }

    </style>

</head>
<body>

<table  align='center'>
<center><tr>
   <td><h1><u>Registration Form</u></h1></td>
</tr><center>
 <form action="logindb.php" method="post">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr>
    <td align='center'><b>Name:</b></td>
    <td><input type='text' name='name' id="name" required placeholder="Enter your name" style='height: 25px; width: 200px'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Address:</b></td>
    <td><input type="text" name="Address" id="Address" required placeholder="Enter your address" style='height: 25px; width: 200px;  font-size: 14px'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Date Of Birth:</b></td>
    <td><input type='date' name='dbo' id="dbo" required placeholder="Enter your Date Of Birth" style='height: 25px; width: 200px'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr >
    <td align='center' ><b>Gender:</b></td>
    <td ><input type='radio' name='gender' value="female" id="female" checked>female &nbsp
    <input type='radio' name='gender' value="male" id="male" >male &nbsp
    <input type='radio' name='gender' value="other" id="other" >other</td>
</tr>
<tr> <td>&nbsp;</td> </tr>

    <td align='center'><b>Phone:</b></td>
    <td><input type='number' name='mbl' id="mbl" placeholder="Enter your phone number" style='height: 25px; width: 200px' required="true"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Email:</b></td>
    <td><input type='text' name='email' id="email" pattern=".+@gmail.com" required placeholder="Enter your email address" style='height: 25px; width: 200px'>
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>City:</b></td>
    <td><select required style='height: 25px; font-size: 14px' id="city" name="city">
        <option value="select">Select</option>
        <option value="Nashik">Nashik</option>
        <option value="Pune">Pune</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Nagpur">Nagpur</option>
        <option value="Thane">Thane</option>
        </select></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
 <tr>
    <td align='center'><b>Username</b></td>
    <td><input type='text' name='username' id="username" required placeholder="Enter your username" style='height: 25px; width: 200px'>
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Password</b></td>
    <td><input type='password' name='password' id="password" required placeholder="Enter your password" style='height: 25px; width: 200px'>
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<!-- <tr>
    <td align='center'><b>Conform Password</b></td>
    <td><input type='password' name='conformpass' id="conformpass" required placeholder="Renter your password" style='height: 25px; width: 200px'>
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr>  -->
<table  align='center'>
<tr>
    <td align='center'><input type='submit' value="REGISTER" onclick="register()" style='height: 35px; width: 150px; background-color: #62C5E9; font-size: 17px; font-style: solid'></td>
</tr>
</table>
</table>
</table>
</form>
</table>
</body>
</html>
