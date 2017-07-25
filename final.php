<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>

 <title>LABOURS | CL Inc.</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="header">

<img src="cli.jpg" class="logo" > &nbsp
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
<br>
<br>
<br>
<br>
<br>
<?php
session_start();
$usr = $_SESSION['user'];
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$sql="UPDATE labour set start=now(), status=0 where regno=$usr";
	$result = mysqli_query($conn,$sql);
}
?>
<div id="message">
<div id="container" >
<h1>YOU HAVE SUCCESSFULLY ACCEPTED THE CUSTOMER REQUEST</h1> 
<BR>
<br>
<br>
<br>
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
