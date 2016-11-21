<?php
$link=mysql_connect('localhost','root','');
$result=mysql_query('USE ShowRoomMobil');
$result=mysql_query('SELECT * FROM mobil');
while ($row=mysql_fetch_array($result,MYSQL_BOTH))
 {
   echo $row[0]." ".$row['Merk']." ".$row['Model']." ";
   echo $row[3]." ".$row['Pintu'] ;
   echo "$row[5] $row[6] $row[7]";
   echo "<br/>";
 }
?>