<html>
<head>
<title>adminviewtechnicalaccount</title>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
</head>
<body><br><br><br>
<h3><center>List of customers that are pay consumptions  of water </center></h3>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){     
$select1 = $_POST['select1']; 
$select2 = $_POST['select2']; 
if(empty($select1) and empty($select2)){
$make = '<h4>You must type the month , year to search!and customer_id</h4>';
}else{                                                                	
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM consumtionpayedcustomer WHERE Month LIKE '%$select1%' and Year LIKE '%$select2%' ";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='green' align='center'>
	  
<tr>
<th bgcolor='green'>id</th>
<th bgcolor='green'>First Name</th>    			
<th bgcolor='green'>Last  Name</th> 
<th bgcolor='green'>Customer Id</th>                 				
<th bgcolor='green'>Meter Id</th>
<th bgcolor='green'>Date</th>                      
<th bgcolor='green'>Month</th> 
<th bgcolor='green'>Year</th> 
<th bgcolor='green'>Previous<br>Reading</th>
<th bgcolor='green'>Present<br>Reading</th>
<th bgcolor='green'>Price<br>In Birr</th>
</tr>";
 echo "<tr>";
  $id    = $row['id'];
  $firstname  = $row['customerfirstname'];
  $lastname  = $row['customerlastname'];
  $customer_id  = $row['customer_id'];
  $meterid  = $row['meterid'];
  $Date  = $row['Date'];
  $Month  = $row['Month'];
  $Year  = $row['Year'];
  $previous_Reading  = $row['previous_Reading'];
  $present_Reading  = $row['present_Reading'];
  $price  = $row['price'];
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['customerfirstname'] . "</td>";
  echo "<td>" . $row['customerlastname'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['previous_Reading'] . "</td>";
  echo "<td>" . $row['present_Reading'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  /*echo "<td><a rel='facebox' href='Customerviewbill.php?id=".$row['id']."'>View Payment</a> ";*/
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