<html>
<head>
</head>
<body>
<?php
include("conn.php");
$date= date("Y-m-d");
?>
<?php
include("header.php");
?>
<style>
body
{background-color:#003862;}
</style>
<br/>
<form action="?" method="post">
Date:
<input type="date" name="Date" required/><br />
<center><input type="submit" value="SUBMIT" /></center>
</form>

<table align="center" width="100%" id="table1" cellpadding="5" cellspacing="5" border="1">
    <tr><th colspan="3"><center>ATTENDENCE LIST</center></th></tr>
<tr>
<th>Roll Number</th>
<th>Time</th>
</tr>

<?php 

    
	$date= $_REQUEST["Date"];
	$result=mysql_query("Select Roll_Number, Time from entry where Date= '$date' order by Roll_Number",$conn);
	$i=1;
	$temp=0;
	while($row=mysql_fetch_array($result))
	{
?>
	<tr align="center"<?php if($i%2) { ?> style="background:#CCCCCC" <?php } ?>>
	
    <?php 
	
	if ($row['Roll_Number'] == $temp);
	else
	{
	
	?>
	<td align="center"><?php echo $row['Roll_Number'] ?></td>
    <td align="center"><?php echo $row['Time'] ?></td>
    </tr>
	<?php 
	} ?>
<?php $temp= $row['Roll_Number']; 
?>

<?php 
} 
?>
</table>
</body>

</html>
