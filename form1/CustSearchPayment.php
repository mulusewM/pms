<body><br><br>
<h3><center>Data Table of Consumption of water </center></h3>	
	
	<?php
	session_start();
$session=$_SESSION['id'];
include 'db1.php';
$result = mysql_query("SELECT * FROM  consumtionpayedcustomer where id= '$session'and customer_id='$session'");
while($row = mysql_fetch_array($result))
  {
  $customer_id=$row['customer_id'];  
  }
?>
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){     
$select1 = $_POST['select1']; 
$select2 = $_POST['select2']; 
if(empty($select1) and empty($select2)){
$make = '<h4>You must type your Meter ID to search!</h4>';
}else{                                                                	
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM consumtionpayedcustomer WHERE customer_id LIKE '%$customer_id%' and Month LIKE '%$select1%' and Year LIKE '%$select2%' ";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='green' align='center'>
<tr>
<th bgcolor='green'>id</th>
<th bgcolor='green'>First Name</th>    			
<th bgcolor='green'>Last  Name</th>
<th bgcolor='green'>kebele</th> 
<th bgcolor='green'>house number</th>
<th bgcolor='green'>Customer Id</th>
<th bgcolor='green'>Meter Id</th>		
<th bgcolor='green'>Date</th>                      
<th bgcolor='green'>Month</th> 
<th bgcolor='green'>Year</th> 
<th bgcolor='green'>Previous<br>Reading</th>
<th bgcolor='green'>Present<br>Reading</th>
<th bgcolor='green'>Price<br>In Birr</th>
<!--<th bgcolor='green'>Action</th>-->
</tr>";
 echo "<tr>";
  $id    = $row['id'];
  $firstname  = $row['firstname'];
  $lastname  = $row['lastname'];
  $kebele  = $row['kebele'];
  $housenumber  = $row['housenumber'];
  $customer_id  = $row['customer_id'];
  $meterid  = $row['meterid'];
  $Date  = $row['Date'];
  $Month  = $row['Month'];
  $Year  = $row['Year'];
  $previous_Reading  = $row['previous_Reading'];
  $present_Reading  = $row['present_Reading'];
  $price  = $row['price'];
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['previous_Reading'] . "</td>";
  echo "<td>" . $row['present_Reading'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
 //echo "<td><a rel='facebox' href='Customerviewbill.php?id=".$row['id']."'>View Payment</a> ";
 //echo "<td><a rel='facebox' href='customerpaywaterconsumption.php?id=".$row['id']."'>Pay</a> ";
   echo "</tr>";
echo "</table>";
	}
}else
{
echo'<h2> Search Result</h2>';

print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}
?>
<?php if(isset($_GET['errr'])){
	echo "<script>alert('Invalid account number or Password Please Try Again!!!')</script>";
	} ?>