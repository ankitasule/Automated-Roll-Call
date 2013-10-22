<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>page4</title>
</head>

<body>
<?php
include("header.php");
?>
<body background="im3.jpg">
<center>
<h2><b><font color="#999966">ROLL CALL<br />
CHECK ENTRY</font></b></h2>
<form action="validate3.php" method="post">
<font color="#999966">
<table>
<tr>
<td>
WARDEN NAME: </td>
<td><input type="text" name="name" required /><br />
</td></tr>
<tr>
<td>
PASSWORD:</td>
<td> <input type="password" name="PASS" required/><br />
</td>
</tr>

<tr>
<td>
<center><input type="submit" value="SUBMIT" /></center>
</td></tr>
</table></font>
</form>
</body>
</html>
