<?php

include_once 'dbconnect.php';

if(isset($_POST['send']))
{
    $cregno = mysqli_real_escape_string($conn,$_POST['cregnumber']);
    $qry = mysqli_real_escape_string($conn,$_POST['query']);
	$wregno = mysqli_real_escape_string($conn,$_POST['wregnumber']);
	$rating = mysqli_real_escape_string($conn,$_POST['rating']);

    if(mysqli_query($conn,"INSERT INTO query(cregno, qry, wregno, rating) VALUES('$cregno', '$qry', '$wregno', '$rating')"))
    {
		header("Location: feedback.html");
    }
    else
    {
        ?>
        <script>alert('Error while registering you...');</script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>CONTACT US | CL Inc.</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script >
function validate()
{
	if(document.contactform.cregnumber.value=="")
 {
    alert("Please Enter Valid Customer Registration Number");
   document.contactform.cregnumber.focus() ;
   return false;
 }
 else if(document.contactform.wregnumber.value=="")
 {
    alert("Please Enter Valid Worker Registration Number");
   document.contactform.wregnumber.focus() ;
   return false;
 }
 else if(document.contactform.rating.value=="")
 {
    alert("Please Enter Valid Rating");
   document.contactform.rating.focus() ;
   return false;
 }
else if(document.contactform.query.value=="")
 {
    alert("Please Enter Message");
   document.contactform.query.focus() ;
   return false;
 }
return(true);
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


<center>
<div id="contactusform">
<div id="container">
<form id="contact_form" name="contactform" action="contactus.php" method="POST">
<table>
<tr>
<td>Feedback(if any):</td>
<td><textarea  name="query"  cols="22" rows="5"  ></textarea></td>
</tr>
<tr>
<td>Customer Registration number:</td>
 <td><input type="number" name="cregnumber" ></td>
</tr>
<tr>
<td>Worker Registration number:</td>
 <td><input type="number" name="wregnumber" ></td>
</tr>
<tr>
<td>Rating:</td>
 <td><input type="number" name="rating" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" style="background-color:#cc0000" name="send" value="Send" onclick="return validate();"/> &nbsp <input type="reset" style="background-color:#cc0000" value="Reset"></td>
</tr>
</table>
</form>
</div>
</div>
</center>


<div id="founders">
<div id="container"><br>
<center><h1>FOUNDERS</h1>
<div class="pics">

<img id="oval" src="Anshul.jpg" height="300px" width="300px" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<img id="oval" src="Nimesh.jpg" height="300px" width="300px">


</div></center>
<div id="names">
<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ANSHUL AGARWAL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NIMESH DOOLANI</h2>
</div>
<center>
<div id="socialnetwork">
<a href="https://www.facebook.com/anshtgr8?fref=ts"><img id="oval" src="fblogo.png" height="50px" width="50px"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="https://www.facebook.com/Nimesh.Doolani"><img id="oval" src="fblogo.png" height="50px" width="50px"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div></center>
</div>
</div>

<div id="footer" >
<p>Follow Us On </p>
<a href="https://www.facebook.com/anshtgr8"><img src="fb.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://www.instagram.com/agarwal_anshul"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="https://twitter.com/nimesh_doolani?s=08"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | CL Inc.</p>
</div>
</body>
</html>
