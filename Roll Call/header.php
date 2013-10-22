<?php
if(isset($_SESSION['type']))
$role=$_SESSION['type'];
else
{
	$role=0;
}
if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-stri.ct.dtd">
<html>
<head>
<title>Header</title>
<link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
</head>
<body>
<div id="header">
<table width="100%">
<tr>
<td><div style="padding-left:50px;" align="right"><span><img src="logo1.jpg" alt="Logo" width="100" height="100" /></span></div></td>
<td style="padding-left:100px; max-width:500px;" align="center"><h1><font color="#FFFFFF">National Institute of Technology Tiruchirappalli<br/></h1><h2>ROll CALL MACHINE<br/></h2><h3>ATTENDENCE</h3></td></font>
<td align="left"><b><span style="text-decoration:underline font-size: large;"><?php echo $user;?></span></b><font color="#FF0000" >TIME: BETWEEN 9PM TO 10PM</font></td>
</tr>

</table>
<div id="menu">
  <ul id="nav">
  <?php
  
   if($role==1)
   echo '<li><a href="index.php">Home</a></li>';
   if($role==1)
   echo '<li><a href="try.php">My Complaints</a></li>';  
   if($role==1)
   echo '<li><a href="feedback.php"><font color="">Feedback</a></font></li>';
    if($role>=1)
   echo '<li><a href="logout.php">Logout</a></li>';
   echo '';
   
    ?>
   
   </ul>
 </div>
</div>