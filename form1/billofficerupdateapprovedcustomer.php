		 <?php	 
include 'db1.php';
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];                      
	$last_name = $_POST['last_name'];                                      
	$customer_id = $_POST['customer_id'];              	                  			
	$kebele = $_POST['kebele'];
	$house_number = $_POST['house_number']; 
	
	
	     $result = mysql_query("select * from approvedtable where customer_id='$customer_id' or house_number='$house_number'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="billofficerviewapprovedcustomer.php"</script>';
									?>
                                    <?php
                                } else {
	
	mysql_query("UPDATE approvedtable SET id ='$id', first_name ='$first_name',
		 last_name ='$last_name', customer_id ='$customer_id',kebele ='$kebele' ,house_number ='$house_number' WHERE id = '$user_id'");
			
         echo '<script>alert("Data Successfully Updated !")</script>';
		 echo "<script>windows: location='billofficerviewapprovedcustomer.php'</script>";				
			
			}	
		?>