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
$sele = "SELECT * FROM replyforcustomer WHERE id LIKE '%$id%'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='' align='center'>
<tr>
<th bgcolor=''>id</th>
<th bgcolor=''>Customer FName</th>    			
<th bgcolor=''>Customer LName</th>
<th bgcolor=''>Customer Phone No</th>
<th bgcolor=''>Customer Id</th>
<th bgcolor=''>replay_text</th>
</tr>";
echo "<tr>";
  $id    = $row['id'];
  $firstname  = $row['firstname'];
  $lastname  = $row['lastname'];
  $phonenumber  = $row['phonenumber'];
  $customeridnumber  = $row['customerid'];
  $textarea  = $row['replay_text'];
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['phonenumber'] . "</td>";
  echo "<td>" . $row['customerid'] . "</td>";
  echo "<td>" . $row[' replay_text'] . "</td>";
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
