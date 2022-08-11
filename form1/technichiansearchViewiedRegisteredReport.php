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
<h3><center>Registered Report Record Tuple!</center></h3>
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
$make = '<h4>You must type a Meter Id to search!</h4>';
}else{
$make = '<h4>No Match Found!</h4>';
$sele = "SELECT * FROM technicalreport WHERE meterid LIKE '%$name%'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){
      echo "<table border='1' bgcolor='green' align='center'>
<tr>      
<th bgcolor='green'>Technical First<br>Name</th>
<th bgcolor='green'>Technical Last<br>Name</th>
<th bgcolor='green'>kebele</th>
<th bgcolor='green'>House<br>Number</th>    
<th bgcolor='green'>Customer<br>Id</th>
<th bgcolor='green'>Meter Id</th>   
<th bgcolor='green'>Date</th>
<th bgcolor='green'>Month</th>
<th bgcolor='green'>Year</th>
<th bgcolor='green'>Task Done</th>
<th bgcolor='green'>Action</th>
</tr>";


 echo "<tr>";
 $customer_id  = $row['customer_id'];
  $firstname  = $row['firstname'];
  $lastname  = $row['lastname'];
  $Kebele    = $row['Kebele'];
  $housenumber  = $row['housenumber'];
  $meterid  = $row['meterid'];
  $date    = $row['date'];
  $Month    = $row['Month'];
  $Year    = $row['Year'];
  $task  = $row['task'];
  
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";   
  echo "<td>" . $row['Kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['task'] . "</td>";
 echo "<td><a rel='facebox' href='updateRRBtechni.php?customer_id=".$row['customer_id']."'>Edit </a>| ";
 echo "<a rel='facebox' href='deluser.php?customer_id=".$row['customer_id']."'>Del</td>"; 
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
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
