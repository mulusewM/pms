<?php
include 'db1.php';
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$price = $_POST['price'];
	$date=$_POST['date'] ;
	//$id=$_POST['id'] ;
         mysql_query("INSERT INTO  bill (owners_id,prev,pres,price,date ) 
		 VALUES ('$owners_id','$prev','$pres','$price','$date')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="calculatebill.php"</script>';