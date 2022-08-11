<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from oldcustomeordermaintenance WHERE id='$id'");
			

		 echo '<script>windows: location="viewoldcustomerorder.php"</script>';	