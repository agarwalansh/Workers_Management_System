<?php
include_once 'dbconnect.php';
if (isset($_POST['submit6']))
	{
		session_start(); //to ensure you are using same session
		session_destroy(); //destroy the session
		header("location: lay.html"); //to redirect back to "index.php" after logging out
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>

 <title>COMPANIES | CL Inc.</title>
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
<form method="post">
	<input type="submit" style="background-color:#cc0000; height:50px; float:right; margin-right:0px; margin-bottom:20px" name ="submit6" value="Logout"/>
</form>
<?php
session_start();
$usr = $_SESSION['user'];
 $sql = "SELECT labour.name,labour.city,labour.type,labour.regno FROM company,labour WHERE company.regno=\"$usr\" AND company.city = labour.city AND req=1 AND status=1";
 $res = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($res);
 if($count>0)
 {
 ?>
 <form action="book_comp.php" method="post">
	<table id="table1" border="1">
		<tr>
			<th>Name</th><th>City</th><th>Skill</th><th>Rating</th><th>Select</th>
		</tr>
 <?php
 $i=1;
 while($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {
	 
	 ?>
		<tr>
			<td><?=$row['name']?></td>
			<td><?=$row['city']?></td>
			<td><?=$row['type']?></td>
			<td><?php 
				$no=$row['regno'];
				$sql1 = "SELECT avg(rating) AS ag FROM query WHERE wregno=$no";
				$avg = mysqli_query($conn,$sql1);
				echo mysqli_fetch_array($avg,MYSQLI_BOTH)['ag'];
				?>
			</td>
			<td><input name="name<?=$i?>" value="<?=$row['name']?>" type="checkbox"></td>
		</tr>
	 <?php
	 $i++;
 }
?>
	</table>
		<input type="submit" style="background-color:#cc0000; margin-left:330px; margin-bottom:10px" value="Request Labourers"/>
		<?php
 }
 else
 {
	 ?>
	 <div id="message">
		<div id="container" >
		<h1>NO LABOURERS FOUND. SORRY!</h1> 
		<br>
		<br>
		</div>
		</div>
		<?php
 }
 ?>
</form>
<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul/"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc.</p>
</div>
</body>
</html>
