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
<h3><center>Data Table Of Meter Reader Report</center></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from waterconsumtion";
$r=mysql_query($q,$conn);
echo "<center>";
echo "<table border='1' bgcolor='green'>
<tr> 
<th>id</th>      
<th>MRfirstname</th>
<th>MRlastname</th>
<th>customerfirstname</th>
<th>customerlastname</th>
<th>Kebele</th>
<th>housenumber</th> 
<th>customer_id</th> 
<th>meterid</th> 
<th>Date</th>
<th>Month</th>
<th>Year</th>
<th>Previous<br>Reading</th>   
<th>Present<br>Reading</th>
<th>consumtion</th>
<th>price</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['MRfirstname'] . "</td>";
  echo "<td>" . $row['MRlastname'] . "</td>";
  echo "<td>" . $row['customerfirstname'] . "</td>";
  echo "<td>" . $row['customerlastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['previous Reading'] . "</td>";
  echo "<td>" . $row['present Reading'] . "</td>";
  echo "<td>" . $row['consumtion'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
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
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
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
 