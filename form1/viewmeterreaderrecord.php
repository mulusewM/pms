<html>
<head>
<title>View Report Genereted</title>
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
<body><br>
<h3 align="center"><font color="#003333">Consumption of Water Data Table</font></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from consumtionpayedcustomer";
$r=mysql_query($q,$conn);

echo "<table border='1' bgcolor='green'>
<tr> 
<th>Meter<br>ID</th>     
<th>Customer<br>First Name</th>
<th>Customer<br>Last Name</th>
<th>Date</th>
<th>Month</th>
<th>Year</th>
<th>Kebele</th>
<th>House <br>Number</th>       
<th>Previous<br>Reading</th>   
<th>Present<br>Reading</th>
<th>action</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['customerfirstname'] . "</td>";
  echo "<td>" . $row['customerlastname'] . "</td>";
   echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['previous_Reading'] . "</td>";
  echo "<td>" . $row['present_Reading'] . "</td>";
 echo "<td><a rel='facebox' href='updateconsumtionmeterreader.php?meterid=".$row['meterid']."'>Edit </a>| ";
 echo "<a rel='facebox' href='delmeterreadenrecord.php?meterid=".$row['meterid']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>
</body>
</html>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_meter_id = element.attr("meter_id");

//Built a url to send
var info = 'meter_id=' + del_meter_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
 