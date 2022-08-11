<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db("pharmacyfinall",$con);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}


     
?>
