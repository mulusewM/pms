<html>
<head>
<title>ViewRegisteredReportbytechnichian</title>
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
<h3><center>Data Table of New Line  Connection Order</center></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from newcustomerlineconection";
$r=mysql_query($q,$conn);

echo "<center>";
echo "<table border='1' bgcolor='green'>
<tr>
<th>Id</th>
<th>Customer<br>FirstName</th>
<th>Customer<br>Lastname</th>
<th>Kebele</th>
<th>House<br>Number</th>
<th>customerid</th>
<th>Phonenumber</th>
<th>request</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['idnumber'] . "</td>";
  echo "<td>" . $row['phonenumber'] . "</td>";
  echo "<td>" . $row['request'] . "</td>";
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
 