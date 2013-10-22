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
    <tr><th colspan="3"><center>LIST</center></th></tr>
    <tr>
<th>Name</th>
<th>Roll Number</th>
<th>Room Number</th>
</tr>
<?php
	$result=mysql_query("Select Name,Roll_Number,Room_no from student_detail",$conn);
	$i=1;
	while($row=mysql_fetch_array($result))
	{
?>
	<tr align="center"<?php if($i%2) { ?> style="background:#CCCCCC" <?php } ?>>
    <td align="center"><?php echo $row['Name'] ?></td>
    <td align="center"><?php echo $row['Roll_Number'] ?></td>
    <td align="center"><?php echo $row['Room_no'] ?></td>
    </tr>

<?php } ?>
</table>
</body>

</html>
