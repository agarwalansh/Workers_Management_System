<?php

include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
    $name = mysqli_real_escape_string($conn,$_POST['firstname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
	$type = mysqli_real_escape_string($conn,$_POST['specialskill']);
	$regno = mysqli_real_escape_string($conn,$_POST['lrn']);
	$pwd = md5(mysqli_real_escape_string($conn,$_POST['password']));

    if(mysqli_query($conn,"INSERT INTO labour(name,email,city,type,regno,pwd) VALUES('$name','$email','$city','$type','$regno','$pwd')"))
    {
		session_start();
		$_SESSION['user'] = $regno;
        header("Location: confirm.php");
    }
    else
    {
        ?>
        <script>alert('Error while registering you...');</script>
        <?php
    }
}
?>
<?php
include_once 'dbconnect.php';

if (isset($_POST['submit2']))
	{
    $regno = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    $res = mysqli_query($conn,"SELECT * FROM labour WHERE regno='$regno'");
    $row = mysqli_fetch_array($res,MYSQLI_BOTH);
    $count = mysqli_num_rows($res);
   if($count == 1 && $row['pwd']==md5($pwd )) {
    session_start();
	$_SESSION['user'] = $regno;
	header("Location: confirm.php");
   } else {
    ?>
        <script>alert('INVALID CREDENTIALS');</script>
        <?php
   }
}
?>
<!DOCTYPE html>
<html>
<head> <title>LABOURS | CL Inc.</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script>
function svalidate()
{
	if(document.signinform.username.value=="")
 {
    alert("Please Enter valid Username");
   document.signinform.username.focus() ;
   return false;
 }
 else if(document.signinform.password.value=="")
 {
    alert("Please Enter valid Password");
   document.signinform.password.focus() ;
   return false;
 }
 return true;
}


function rvalidate()
{


   if(document.registerform.firstname.value=="")
 {
    alert("Please Enter First Name");
  document.registerform.firstname.focus() ;
   return false;
 }
 else if(document.registerform.email.value=="")
 {
 alert("Please Enter E-mail ID");
 document.registerform.email.focus();
 return false;
 }

 else if(document.registerform.city.value=="")
 {
    alert("Please Enter City");
   document.registerform.city.focus() ;
   return false;
 }
else if(document.registerform.specialskill.value=="" )
 {
    alert("Please Enter Special Skill");
   document.registerform.specialskill.focus() ;
   return false;
 }

 else if(document.registerform.lrn.value=="")
 {
    alert("Please Enter valid Registration Number");
   document.registerform.lrn.focus() ;
   return false;
 }
 else if(document.registerform.password.value=="")
 {
    alert("Please Enter valid Password");
   document.registerform.password.focus() ;
   return false;
 }
return true;
}
</script>
</head>
<body>

<div id="header">
<img src="cli.jpg" class="logo"> &nbsp
<img src="extended.jpg" class="banner">

</div>
<div id='cssmenu'>
<hr size="4" COLOR="#cc0000">
<ul>
<li><a href="lay.html">Home</a></li>
<li><a href="company.php">Companies</a></li>
<li><a href="customer.php">Customer</a></li>
<li><a href="labour.php">Labours</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="contactus.php">Contact us</a></li>
</ul>
</div>
<hr>

<div id="signinbar">
<div id="container">
<center><h1>SIGN-IN OR REGISTER<h1><center>
</div>
</div>

<div id="signinform">
<div id="container">
<div  style="width:100%; margin: 0 auto"; id="form">
<form id="signinform" name="signinform" value="signin" method="POST">

<table cellspacing="0" cellpadding="0" border="0">
<tr>
  <td>Labour Registration Number: &nbsp </td>
  <td><input type="number" name="username" ></td>
</tr>
<tr>
<td>Password: &nbsp </td>
 <td><input type="password" name="password" ></td>
</tr>
<td><input type="submit" style="background-color:#cc0000" name="submit2" value="Sign In" onclick="return svalidate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
</table>
  
</form>
</div>
</div>
</div>

<div id="registerform">
<div id="container">
<div  style="width:100%; margin: 0 auto"; id="form">
<form  action="labour.php" id="registerform" name="registerform" value="register" method="POST">

<table cellspacing="0" cellpadding="0" border="0">
<tr>
  <td>First Name: &nbsp </td>
  <td><input type="text" name="firstname" ></td>
</tr>
<tr>
  <td> E-mail ID: &nbsp </td>
   <td><input type="email" name="email" ></td>
</tr>
 
<tr>
 <td> City: &nbsp </td>
 <td><input type="text" name="city" ></td>
</tr>
<tr>
 <td> Special skill: &nbsp </td>
 <td><input type="text" name="specialskill" ></td>
</tr>

 <tr>
<td>Labour Registration Number:</td>
 <td><input type="number" name="lrn"></td>
</tr>
 <tr>
<td> Password: &nbsp </td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" style="background-color:#cc0000" name="signup" value="Register" onclick="return rvalidate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
</table>
  
</form>
</div>
</div>
</div>

<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul/"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc.</p>
</div>

</body>
</html>
