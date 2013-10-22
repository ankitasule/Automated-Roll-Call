
<?php
include("conn.php");
$t1= 1300;
$t2= 1400;
$t3= 1600;

$tt1= strtotime($t1);
$tt3= strtotime($t3);
$tt2= strtotime($t2);

     
           if(date('h:i:s',$tt1)<date('h:i:s',$tt2) && date('h:i:s',$tt2)<date('h:i:s',$tt3))
          {
		  header("location:page6.php");
          }
		  else
		  {
		  header("location:timefailure.php");
		  }
 ?>
