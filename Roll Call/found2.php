<html>
<head>
</head>
<body>
<?php
include("conn.php");
?>
<style>
body
{background-color:#595C5C;}
</style>
<br/>
<table align="center" width="100%" id="table1" cellpadding="5" cellspacing="5" border="1">
    <tr><th colspan="3"><center>PRESENT LIST</center></th></tr>
    <tr>
<th>Roll Number</th>
<th>DATE</th>
<th>Time</th>
</tr>
<?php 


	$result=mysql_query("Select Roll_Number,Date, Time from entry ",$conn);
	$i=1;
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
    <td align="center"><?php echo $row['Date'] ?></td>
    <td align="center"><?php echo $row['Time'] ?></td>
    </tr>
	<?php 
	} ?>

<?php $temp= $row['Roll_Number'] ?>

<?php 
} ?>
</table>
</body>

</html>
