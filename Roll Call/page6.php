<?php
include("conn.php");
$q2 = "select * from entry ";
$r2=mysql_query($q2);
while($d2 = mysql_fetch_array($r2))
          {
           echo $d2['Roll_Number'];
           echo $d2['Time'];
          }
?>