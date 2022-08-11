 <?php
include 'db1.php';
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$customerfirstname = $_POST['customerfirstname'];                      
	$customerlastname = $_POST['customerlastname'];
    $customer_id = $_POST['customer_id'];	
	$Kebele = $_POST['Kebele'];              	                  			
	$user_name = $_POST['user_name'];
	$password = ($_POST['password']);
	$pinnumber = $_POST['pinnumber']; 
	
	mysql_query("UPDATE customer SET id ='$id', customer_id ='$customer_id', customerfirstname ='$customerfirstname',
		 customerlastname ='$customerlastname', email ='$email',user_name ='$user_name' ,password ='$password' ,pinnumber ='$pinnumber' WHERE id = '$user_id'");

         echo '<script>alert("Data Successfully Updated !")</script>';
        
		 echo "<script>windows: location=' adminviewcustomeraccount.php'</script>";
		 

