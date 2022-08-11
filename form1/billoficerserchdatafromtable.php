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
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
$make = '<h4>You must type a Meter Id to search!</h4>';
}
else{
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM waterconsumtion WHERE meter_id='$name'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
          
	  echo "<br>";	  
      echo "<h3><center>Data Table Of Water Consumtion Payment</center></h3>";
      echo "<table border='1' bgcolor='green' align='center'>
<tr>  
<th>Meter<br>ID</th>    
<th>Customer<br>First Name</th>
<th>Customer<br>Last Name</th>
<th>Kebele</th>
<th>House <br>Number</th>  
<th>Date</th>
<th>Month</th>
<th>Year</th>
<th>Previous<br>Reading</th>   
<th>Present<br>Reading</th>
<th>Action</th>
</tr>";
echo "<tr>";
$meter_id  = $row['meter_id'];
  $first_name  = $row['first_name'];
  $last_name  = $row['last_name'];
  $kebele    = $row['kebele'];
  $house_number  = $row['house_number'];
  $Date  = $row['Date'];
  $Month  = $row['Month'];
  $Year  = $row['Year'];
  $previous_reading  = $row['previous_reading'];
  $present_reading  = $row['present_reading'];
echo "<td>" . $row['meter_id'] . "</td>";  
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['house_number'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['previous_reading'] . "</td>";
  echo "<td>" . $row['present_reading'] . "</td>";
  echo "<td><a rel='facebox' href='billofficerviewbill.php?id=".$row['id']."'>View Bill</a>";
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
 