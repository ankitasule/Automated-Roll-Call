<?php
include("conn.php");
$id= $_REQUEST["name"];
$pass= $_REQUEST["PASS"];

$q2 = "select * from warden_list where Warden_Name='$id' and PASSWORD='$pass'";
$r2=mysql_query($q2);
if($row=mysql_fetch_array($r2))
{
header("location:page7.php");
}
else
{
header("location:failure1.php");
}
?> 