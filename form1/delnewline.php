<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from newcustomerlineconection WHERE id='$id'");
			

		 echo '<script>windows: location="viewnewlineconectionorder.php"</script>';	