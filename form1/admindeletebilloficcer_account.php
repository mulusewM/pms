<?php
include 'db1.php';
	$id = $_POST['id'];
	mysql_query("DELETE from  creataccountbillofficer WHERE id = '$id'");
			
         echo '<script>alert("Successfully One Row is Deleted !")</script>';
		 echo "<script>windows: location='adminviewbillofficeraccont.php'</script>";	