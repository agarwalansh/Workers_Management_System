<?php
include_once 'dbconnect.php';
session_start();
$usr = $_SESSION['user'];
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if (isset($_POST['submit7']))
	{
		session_start(); //to ensure you are using same session
		session_destroy(); //destroy the session
		header("location: lay.html"); //to redirect back to "index.php" after logging out
		exit();
	}
	else if (isset($_POST['submit8']))
	{
		$sql="UPDATE labour set stop = now(), cregno=NULL, coregno=NULL, req=1, status=1 where regno=$usr";
		$result = mysqli_query($conn,$sql);
		header("location: bill.php");
	}
}
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
		<form action="labour.php" method="post">
			<input type="submit" style="background-color:#cc0000; height:50px; float:right; margin-right:0px; margin-bottom:20px" name ="submit7" value="Logout"/>
		</form>
<?php
	$sql="SELECT req, status,cregno,coregno FROM labour WHERE regno='$usr'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result, MYSQLI_BOTH);
	if($row['req']==0 && $row['status'] == 1){
		if($row['coregno']==NULL)
		{
		$creg=$row['cregno'];
		$res=mysqli_query($conn, "SELECT name FROM customer WHERE regno=$creg");
		}
		else if($row['cregno']==NULL)
		{
		$creg=$row['coregno'];
		$res=mysqli_query($conn,"SELECT name FROM company WHERE regno=$creg");
		}
		?>
		<center>
		<h1>You have a request from <?php echo mysqli_fetch_array($res,MYSQLI_BOTH)['name'];?></h1>
		<h1>with Regstration Number <?=$creg?></h1>
		<form action="final.php" method="POST">
		<input type="submit" class="but" style="background-color:#cc0000" value="Confirm"/>
		</form>
		<br>
		<br>
		<br>
		<br>
		<form action="final1.php" method="POST">
		<input type="submit" class="but" style="background-color:#cc0000" value="Reject"/>
		</form>
		<br>
		<br>
		<br>
		</center>
		<?php
	}
	else if($row['req']==0 && $row['status'] == 0)
	{
		?>
		<form method="POST">
		<input type="submit" class="but" name="submit8" style="background-color:#cc0000" value="Reset"/>
		</form>
		<?php
	}
	else {
		?>
		<div id="message">
		<div id="container" >
		<h1>NO REQUESTS PENDING CURRENTLY.</h1> 
		<br>
		<br>
		</div>
		</div>
		<?php
	}
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul/"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc.</p>
</div>

</body>
</html>