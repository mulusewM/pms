<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from  creataccounttechnicalsupervisor WHERE id = '$id'");
			
         echo '<script>alert("Successfully One Row is Deleted !")</script>';
		 echo "<script>windows: location='adminviewtechnicalaccount.php'</script>";	