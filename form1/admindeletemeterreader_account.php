<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from  creataccountformeterreader WHERE id = '$id'");
			
         echo '<script>alert("Successfully One Row is Deleted !")</script>';
		 echo "<script>windows: location='adminviewmeterreaderaccount.php'</script>";	