<?php
include("conn.php");
$id= $_REQUEST["Roll_Number"];
$pass= $_REQUEST["PASS"];
$q = "select * from first_check where ID='$id' and PASSWORD='$pass'";
$r=mysql_query($q);
$date=date("y-m-d");
$time=time(void);

$t1= 1300;
$t2= 1400;
$t3= 1600;

$tt1= strtotime($t1);
$tt3= strtotime($t3);
$tt2= strtotime($t2);

if(date('h:i:s',$tt1)<date('h:i:s',$tt2) && date('h:i:s',$tt2)<date('h:i:s',$tt3))
{

    if($row=mysql_fetch_array($r))
     {
      mysql_query("insert into entry (Roll_Number, Date, Time) values ('$id','$date',now())");
       header("location:page3.php");
     }

    else
     {
     header("location:failure1.php");
     }
}
else
{
header("location:timefailure.php");
}

?>