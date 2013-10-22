<?php
include("conn.php");
$id= $_REQUEST["id"];
$pass= $_REQUEST["pass"];
$q = "select * from first_check where ID='$id' and PASSWORD='$pass'";
$q2 = "select * from warden_list where Warden_Name='$id' and PASSWORD='$pass'";
$r=mysql_query($q);
$r2=mysql_query($q2);
if($row=mysql_fetch_array($r))
{
header("location:page2.php");
}
else if($row=mysql_fetch_array($r2))
{
header("location:page4.php");
}
else
