<?php
 include 'db1.php';
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM  approvedtable WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$test) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$first_name=$test['first_name'] ;
		
       ?>
       <?php
 mysql_query("INSERT INTO tadese (id, first_name)
        VALUES ('$id', '$first_name')");
        ?>
<?php
	$id = $_POST['id'];
	mysql_query("DELETE from  approvedtable WHERE id = '$id'");	
	
         echo '<script>alert("Successfully One Row is Deleted !")</script>';
		 echo "<script>windows: location='billofficerviewapprovedcustomer.php'</script>";	
		 ?>