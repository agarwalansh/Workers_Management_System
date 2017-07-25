<!DOCTYPE html>
<html>
<head>

 <title>ADS | CL Inc.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
.b1
{
background-color: #cc0000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 32px;
    margin: 8px 4px;
    cursor: pointer;
}
</style>
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
<br/>
<br/>
<center>
<?php
$city = array("Mumbai","Agra","Delhi","Bangalore");
$value=$_GET['name'];
switch($value)
{
	case 1:
	?>
	<p style="color:black; font-size:400%;   font-family: din_medium">Reliance Industries Limited</p>
	<br/>
	<p style="color:black; font-size:200%;">Number of workers Required: <?=rand(0,4)?></p>
	<p style="color:black; font-size:200%;">City Located: <?=$city[rand(0,3)]?></p>
	<?php
	break;
	case 2:
	?>
	<p style="color:#A68D2B; font-size:550%;   font-family: sans-serif"><b>LODHA</b></p>
	<h2 style="font-family: sans-serif">BUILDING A BETTER LIFE</h2>
	<br/>
	<br/>
	<p style="color:black; font-size:200%;">Number of workers Required: <?=rand(0,4)?></p>
	<p style="color:black; font-size:200%;">City Located: <?=$city[rand(0,3)]?></p>
	<?php
	break;
	case 3:
	?>
	<p style="color:black; font-size:400%;   font-family: sans-serif"><b><i>LARSEN & TOUBRO</b></i></p>
	<h1>It's all about Imagineering</h1>
	<br/>
	<br/>
	<p style="color:black; font-size:200%;">Number of workers Required: <?=rand(0,4)?></p>
	<p style="color:black; font-size:200%;">City Located: <?=$city[rand(0,3)]?></p>
	<?php
	break;
	case 4:
	?>
	<p style="color:blue; font-size:450%;   font-family: Arial Black, Gadget, sans-serif">TATA</p>
	<h1 style="color:blue; font-family: Arial Black, Gadget, sans-serif">Leadership with trust</h1>
	<br/>
	<br/>
	<p style="color:black; font-size:200%;">Number of workers Required: <?=rand(0,4)?></p>
	<p style="color:black; font-size:200%;">City Located: <?=$city[rand(0,3)]?></p>
	<?php
	break;
	case 5:
	?>
	<p style="color:black; font-size:360%;   font-family: Arial Black, Gadget, sans-serif">Hiranandani</p>
	<h1>creating better communities</h1>
	<br/>
	<br/>
	<p style="color:black; font-size:200%;">Number of workers Required: <?=rand(0,4)?></p>
	<p style="color:black; font-size:200%;">City Located: <?=$city[rand(0,3)]?></p>
	<?php
	break;
	
}
?>
</center>
<br/>
<br/>
<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul/"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc. </p>
</div>
</body>
</html>