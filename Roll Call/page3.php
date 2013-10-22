<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>page3</title>
</head>

<body bgcolor="#669999">
<?php
include("header.php");
?>
<center>
<br />
<br />
<b><h3><font color="#333333"> Roll Call Completed Successfully..!!
<br />

<?php
include("conn.php");
echo "Your Roll Call is done";
?>
<br />
AT TIME:
<?php
$datetime = new DateTime('NOW', new DateTimeZone('America/Los_Angeles'));
echo $datetime->format('Y-m-d H:i:s');
?>
<br />
<form action="page1.php" method="post">
<center><input type="submit" value="Exit" /></center>
</form>

</font></h3></b>
</center>
</body>
</html>
