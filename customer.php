<?php

include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $regno = mysqli_real_escape_string($conn,$_POST['customerregistrationnumber']);
    $pwd = md5(mysqli_real_escape_string($conn,$_POST['password']));


    if(mysqli_query($conn,"INSERT INTO customer(name,city, pwd, regno) VALUES('$name', '$city','$pwd', '$regno')"))
    {
		session_start();
	$_SESSION['user'] = $regno;
		header("Location: data1.php");
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

if (isset($_POST['submit4']))
	{
    $regno = mysqli_real_escape_string($conn,$_POST['customerregistrationnumber']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    $res = mysqli_query($conn,"SELECT * FROM customer WHERE regno='$regno'");
    $row = mysqli_fetch_array($res, MYSQLI_BOTH);
    $count = mysqli_num_rows($res);
   if($count == 1 && $row['pwd']==md5($pwd )) {
    session_start();
	$_SESSION['user'] = $regno;
        header("Location: data1.php");
   } else {
    ?>
        <script>alert('INVALID CREDENTIALS');</script>
        <?php
   }
}
?>
<!DOCTYPE html>
<html>
<head> 
<title>CUSTOMERS | CL Inc.></title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function dvalidate()
{
   if(document.custform.name.value=="")
 {
    alert("Please Enter Your Name");
   document.custform.name.focus() ;
   return false;
 }
 else if(document.custform.city.value=="")
 {
    alert("Please Enter City");
   document.custform.city.focus() ;
   return false;
 }

else if(document.custform.customerregistrationnumber.value=="")
 {
    alert("Please Enter Customer Registration Number");
   document.custform.customerregistrationnumber.focus() ;
   return false;
 }
 else if(document.custform.password.value=="")
 {
    alert("Please Enter Password");
   document.custform.password.focus() ;
   return false;
 }
return(true);
}

function evalidate()
{
  if(document.cust_signinform.customerregistrationnumber.value=="")
 {
    alert("Please Enter valid Registration number");
   document.cust_signinform.customerregistrationnumber.focus() ;
   return false;
 }
 else if(document.cust_signinform.password.value=="")
 {
    alert("Please Enter valid Password");
   document.cust_signinform.password.focus() ;
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

<div id="customerform">
<div id=container>
<form action="customer.php" name="custform" id="custform" method="POST">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td>Full Name:</td>
<td><input type="text" name="name"></td>
</tr>
 <tr> 
<td>City:</td>
<td><input type="text" name="city"></td>
</tr>
<tr>
 <td>Customer Registration Number:</td>
 <td><input type="number" name="customerregistrationnumber"></td>
</tr>
<tr>
 <td>Password:</td>
 
 <td><input type="password" name="password" ></td>
 
</tr>
<tr>
<td></td>
  <td><input type="submit" name="signup" style="background-color:#cc0000" value="Register" onclick="return dvalidate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
</tr>
</table>
</form>
</div>
</div>

<div id="signinform">
<div id="container">
<div  style="width:100%; margin: 0 auto"; id="form">
<form id="cust_signinform" name="cust_signinform" method="POST">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
  <td>Customer Registration Number: &nbsp </td>
  <td><input type="number" name="customerregistrationnumber" ></td>
</tr>
<tr>
<td>Password: &nbsp </td>
 <td><input type="password" name="password" ></td>
</tr>
<td><input type="submit" style="background-color:#cc0000" name="submit4" value="Sign In" onclick="return evalidate()" /> &nbsp  <input type="reset" style="background-color:#cc0000" value="Reset" /></td>
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