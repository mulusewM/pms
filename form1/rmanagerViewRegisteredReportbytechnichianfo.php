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
<h3><center>Data Table Of Task Performed By Technician </center></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from technicalreport";
$r=mysql_query($q,$conn);

echo "<center>";
echo "<table border='1' bgcolor='green'>
<tr>
<th>customer_id</th>
<th>firstname</th>
<th>lastname</th>
<th>Kebele</th>
<th>House<br>Number</th>
<th>Meter<br>Id</th>
<th>Day</th>
<th>Month</th>
<th>Year</th>
<th>Task</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['Kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['task'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</center>";
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
 