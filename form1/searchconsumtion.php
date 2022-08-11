<br /><br />
<center><h3>Technician Feadback Result Record!</h3></center>
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
$make = '<h4>You must type a number to search!</h4>';
}else{
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM waterconsumtion WHERE customer_id LIKE '%$name%'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='' align='center'>
<tr>
<th bgcolor=''>id</th>
<th bgcolor=''>Customer FName</th>    			
<th bgcolor=''>Customer LName</th>
<th bgcolor=''>kebele</th>
<th bgcolor=''>House No</th>
<th bgcolor=''>Customer Id</th>
<th bgcolor=''>Meter Id</th>
<th bgcolor=''>Date</th>
<th bgcolor=''>Month</th>
<th bgcolor=''>Year</th>
<th bgcolor=''>Previous Reading</th>
<th bgcolor=''>Present Reading</th>
<th bgcolor=''>Price</th>
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
  $Month = $row['Month'];
  $Year  = $row['Year'];
  $lastname  = $row['lastname'];
  $Previous_Reading  = $row['Previous_Reading'];
  $Present_Reading  = $row['Present_Reading'];
  $Price  = $row['Price'];
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
echo "<td>" . $row['Month'] . "</td>";
echo "<td>" . $row['Previous_Reading'] . "</td>";
echo "<td>" . $row['Present_Reading'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
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
