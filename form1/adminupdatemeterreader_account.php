		 <?php
include 'db1.php';
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$employeeid= $_POST['employeeid'];
	$first_name = $_POST['first_name'];                      
	$last_name = $_POST['last_name'];                                      
	$email = $_POST['email'];              	                  			
	$user_name = $_POST['user_name'];
	$password = md5($_POST['password']); 
	$pinnumber = $_POST['pinnumber']; 
	
	mysql_query("UPDATE creataccountformeterreader SET id ='$id', employeeid ='$employeeid', first_name ='$first_name',
		 last_name ='$last_name', email ='$email',user_name ='$user_name' ,password ='$password' ,pinnumber ='$pinnumber' WHERE id = '$user_id'");
			
			
         echo '<script>alert("Data Successfully Updated !")</script>';
		 echo "<script>windows: location='adminviewmeterreaderaccount.php'</script>";				
				
			