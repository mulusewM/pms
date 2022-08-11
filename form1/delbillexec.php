<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from bill WHERE id='$id'");
			

		 echo "<script>windows: location='billoficerviewmeterreaderreport.php'</script>";				
			