<?php

include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
    $name = mysqli_real_escape_string($conn,$_POST['companyname']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $regno = mysqli_real_escape_string($conn,$_POST['companyregistrationnumber']);
    $pwd = md5(mysqli_real_escape_string($conn,$_POST['password']));


    if(mysqli_query($conn,"INSERT INTO company(name,city, pwd, regno) VALUES('$name', '$city','$pwd', '$regno')"))
    {
		session_start();
	  $_SESSION['user'] = $regno;
        header("Location: data.php");
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

if (isset($_POST['submit3']))
	{
    $regno = mysqli_real_escape_string($conn, $_POST['companyregistrationnumber']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $res = mysqli_query($conn, "SELECT * FROM company WHERE regno='$regno'");
    $row = mysqli_fetch_array($res , MYSQLI_BOTH);
    $count = mysqli_num_rows($res);
   if($count == 1 && $row['pwd']==md5($pwd )) {
    session_start();
	$_SESSION['user'] = $regno;
	header("Location: data.php");
   } else {
    ?>
        <script>alert('INVALID CREDENTIALS');</script>
        <?php
   }
}
?>
<html>
<head> <title>COMPANIES | CL Inc.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script >
function validate()
{
   if(document.MyForm.companyname.value=="")
 {
    alert("Please Enter Company Name");
   document.MyForm.companyname.focus() ;
   return false;
 }
 else if(document.MyForm.city.value=="")
 {
    alert("Please Enter City");
   document.MyForm.city.focus() ;
   return false;
 }

else if(document.MyForm.companyregistrationnumber.value=="")
 {
    alert("Please Enter Comapny Registration Number");
   document.MyForm.companyregistrationnumber.focus() ;
   return false;
 }
 else if(document.MyForm.password.value=="")
 {
    alert("Please Enter Password");
   document.MyForm.password.focus() ;
   return false;
 }
return(true);
}

function tvalidate()
{
	if(document.comp_signinform.companyregistrationnumber.value=="")
 {
    alert("Please Enter valid Registration number");
   document.comp_signinform.companyregistrationnumber.focus() ;
   return false;
 }
 else if(document.comp_signinform.password.value=="")
 {
    alert("Please Enter valid Password");
   document.comp_signinform.password.focus() ;
   return false;
 }
 return true;
}

</script>
</head>
<body>
<div id="header">
<img src="cli.jpg" class="logo"> &nbsp
<img src="extended.jpg"  class="banner">
</div>
<div id='cssmenu'>
<hr size="4" COLOR="#cc0000">
<ul>
<li><a href="lay.html">Home</a></li>
<li><a href="company.php">Companies</a></li>
<li><a href="customer.php">Customers</a></li>
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

<div id="companyform">
<div id=container>
<form name="MyForm" action="company.php" id="comp_form" method="POST" value="">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td>Company Name: </td>
<td><input type="text" name="companyname"></td>
</tr>
 <tr> 
<td>City:</td>
<td><input type="text" name="city"></td>
</tr>
<tr>
 <td>Company Registration Number:</td>
 <td><input type="number" name="companyregistrationnumber"></td>
</tr>
<tr>
 <td>Password:</td>
 
 <td><input type="password" name="password" ></td>
 
</tr>
<tr>
<td></td>
  <td><input type="submit" style="background-color:#cc0000" value="Register" name="signup" onclick="return validate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
</tr>
</table>
</form>
</div>
</div>


<div id="signinform">
<div id="container">
<div  style="width:100%; margin: 0 auto"; id="form">
<form id="comp_signinform" name="comp_signinform" method="POST">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
  <td>Company Registration Number: &nbsp </td>
  <td><input type="number" name="companyregistrationnumber" ></td>
</tr>
<tr>
<td>Password: &nbsp </td>
 <td><input type="password" name="password" ></td>
</tr>
<td><input type="submit" style="background-color:#cc0000" name="submit3" value="Sign In" onclick="return tvalidate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
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