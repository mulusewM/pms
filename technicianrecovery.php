<?php
include 'form1/db1.php';
$user_id =$_REQUEST['id'];
										  
	$id = $_POST['id'];
	$user_name = $_POST['user_name'];       
	$password = ($_POST['password']);
	$pinnumber = $_POST['pinnumber'];
$result = mysql_query("select * from creataccounttechnicalsupervisor where pinnumber='$pinnumber' or password='$password'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Please  change  your  password and security code!")</script>';
	echo '<script>windows: location="technicianrecoveryform.php"</script>';
									?>
                                    <?php
                                } else {

	mysql_query("UPDATE creataccounttechnicalsupervisor SET id ='$id', user_name ='$user_name', password ='$password', pinnumber = '$pinnumber' WHERE id = '$user_id'");
			
         echo '<script>alert("Account Reseted Successfully Login If U Want!")</script>';
		 echo "<script>windows: location='Technicallogin.php'</script>";	
		 }			
		?>