<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from  creataccountmanager WHERE id = '$id'");
			
         echo '<script>alert("Successfully One Row is Deleted !")</script>';
		 echo "<script>windows: location='adminviewmanageraccount.php'</script>";	