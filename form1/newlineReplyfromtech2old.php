    <?php
	session_start();
$session=$_SESSION['id'];
include 'db1.php';
$result = mysql_query("SELECT * FROM  oldcustomeordermaintenance where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  
  }
?>	
<?php
 include 'db1.php';
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phonenumber = $_POST["phonenumber"];
$customerid = $_POST["customerid"];
$textarea = $_POST["textarea"];


      mysql_query("INSERT INTO replyforcustomer (firstname, lastname, phonenumber, customerid, replay_text)
                                  VALUES ('$firstname', '$lastname', '$phonenumber', '$customerid', '$textarea')")or die(mysql_error());
 
                   
                       echo '<script>alert("Data is Inserted Successfully!")</script>';
		        echo '<script>windows: location="viewoldcustomerorder.php"</script>';

                            ?>


 
