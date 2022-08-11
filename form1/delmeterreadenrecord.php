<?php session_start(); ?>
<?php
 include 'db1.php';
$meter_id =$_REQUEST['MeterID'];

$result = mysql_query("SELECT * FROM  MeterValue WHERE meterID = '$MeterID'");
$test = mysql_fetch_array($result);
if (!$test) 
		{
		die("Error: Data not found..");
		}
				$meter_id=$test['MeterID'] ;
			

?>
<form action="delmeter.php" method="post">
<p>Are you sure you want to delete this record!</p>
<input type="hidden" name="meter_id" value="<?php echo $MeterID; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>