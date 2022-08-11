<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from  technicalreport WHERE id='$id'");
			

		 echo "<script>windows: location='ViewRegisteredReportbytechnichian.php'</script>";	