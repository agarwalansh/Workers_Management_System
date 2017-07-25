<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>

 <title>PAYMENT | CL Inc.</title>
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
<?php
session_start();
$usr = $_SESSION['user'];
		$sql = mysqli_query($conn,"SELECT timestampdiff(second,start,stop) AS diff FROM labour WHERE regno=$usr");
		mysqli_query($conn,"UPDATE labour SET start=null, stop=null WHERE regno=$usr");
		$row = mysqli_fetch_array($sql, MYSQLI_BOTH);
		?>
		<center><h1>Total time of Working: <?=$row['diff']?> Seconds</h1></center>
		<center><p style="color:black; font-size:400%;   font-family: din_medium">Total amount to be paid is Rs. <?=$row['diff']?> </p></center>
<br>
<br>
<br>
<br>
<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul/"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc.</p>
</div>
</body>
</html>