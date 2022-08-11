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
<br><br>
<h3><center>Old Customer Order Information Record!</center></h3>
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
$make = '<h4>You must type a customerid to search!</h4>';
}else{
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM oldcustomeordermaintenance WHERE customerid LIKE '%$name%'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='green' align='center'>
<tr>      
<th bgcolor='green'>id</th>
<th bgcolor='green'>FName</th>
<th bgcolor='green'>LName</th>
<th bgcolor='green'>Kebele</th>
<th bgcolor='green'>House Number</th>
<th bgcolor='green'>Customer Id</th>
<th bgcolor='green'>phonenumber</th>
<th bgcolor='green'>Task Needed</th>      
<th bgcolor='green'>Action</th>
</tr>";


 echo "<tr>";
  $id    = $row['id'];
  $firstname  = $row['firstname'];
  $lastname  = $row['lastname'];
  $kebele  = $row['kebele'];
  $housenumber  = $row['housenumber'];
  $customerid    = $row['customerid'];
  $phonenumber  = $row['phonenumber'];
  $request  = $row['request'];
   echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customerid'] . "</td>";
  echo "<td>" . $row['phonenumber'] . "</td>";
  echo "<td>" . $row['request'] . "</td>";
 echo "<td><a rel='facebox' href='technicaloldcustomerreply.php?id=".$row['id']."'>Reply </a>| ";
 echo "<a rel='facebox' href='deloldcustomerorder.php?id=".$row['id']."'>Del</td>";  
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
 