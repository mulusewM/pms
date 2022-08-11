<?php
include 'db1.php';
	$meter_id = $_POST['meter_id'];
	mysql_query("DELETE from  metervalue WHERE meter_id='$meter_id'");
			

		 echo "<script>windows: location='viewmeterreaderrecord.php'</script>";	