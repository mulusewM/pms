<?php
include ('connection.php');
$create_db = 'CREATE Database Pharmacyfinal';
$dbc = mysql_query( $create_db, $con );
if(!$dbc )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database Pharmacyfinal created successfully    ";  
mysql_close($con);
?>
