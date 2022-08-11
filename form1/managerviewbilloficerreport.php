<html>
<head>
<title>managerviewbilloficerreport</title>
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
<style type="text/css">
.a{
width:150x;
height:90px;
background-color:#FFFFFF;
margin:0 auto;
margin-top:50px;
padding-top: 20px;
padding-left: 60px;
-webkit-border-radius: 15px;
color:#003399;
}
.a input[type="text"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="submit"]{
width:65px;
height:25px;
border:1;
border-bottom-style:solid;
border-color:#00CC33;
border-radius:5px;
-webkit-border-radius:5px;
background-color:#99FF00;
}
</style>
	<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var meterid = document.getElementById('meterid');
 if (isNumeric( meterid, "Please Enter Valid  Meter Id!")) 
{
 return true;
	 }
	  return false; 
}
function notEmpty(elem, helperMsg) 
{ 
if (elem.value.length == 0) 
{ 
alert(helperMsg);
 elem.focus(); // set the focus to this input
 return false; 
} 
return true; 
} 
function isNumeric(elem, helperMsg) 
{ 
var numericExpression = /^[0-9]+$/; 
if (elem.value.match(numericExpression)) 
{ 
return true;
 } 
else 
{ alert(helperMsg); 
elem.focus();
 return false;
 } 
} 
</script>	
</head>
<body><br>
<form action="managerserchdatafromtable.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search Data From Table</h3></center>
<center><table class="a">
<tr>
	<td><input type="text" name="name" id="meterid" placeholder="Enter Meter Id" size="20"></td>
	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
<h3><center>Data Table Of Water Consumtion</center></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from waterconsumtion";
$r=mysql_query($q,$conn);

echo "<table border='1' bgcolor='green'>
<tr>       
<th>Id</th>
<th>Customer<br>First Name</th>
<th>Customer<br>Last Name</th>
<th>Kebele</th>
<th>House <br>Number</th> 
<th>Customer ID</th>      
<th>Meter<br>ID</th>
<th>Date</th>
<th>Month</th>
<th>Year</th>
<th>Previous<br>Reading</th>   
<th>Present<br>Reading</th>
<th>Price<br>By Birr</th>
<th>Action</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['customerfirstname'] . "</td>";
  echo "<td>" . $row['customerlastname'] . "</td>";
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
  echo "<td><a rel='facebox' href='billofficerviewbill.php?id=".$row['id']."'>View Bill</a>";
  echo "</tr>";
  }
echo "</table>";

?>
</body>
</html>
