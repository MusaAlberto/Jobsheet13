<?php
$link = mysql_connect('localhost','root','');
$result = mysql_query('USE showroommobil');
$result = mysql_query('SELECT * FROM mobil');
while ($row = mysql_fetch_array($result, MYSQL_NUM))
 {
   echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7]";
   echo "<br />";
 }
?>