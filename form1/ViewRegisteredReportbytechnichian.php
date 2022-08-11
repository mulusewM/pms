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
<style type="text/css">
.a input[type="text"]{
width:150px;
height:30px;
width:200px;
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
 if (isNumeric( meterid, "Please Enter Valid Meter Id!")) 
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
<body>
<form action="technichiansearchViewiedRegisteredReport.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search From Table Registered Report!</h3></center>
<center><table class="a">
<tr>
	<td><input type="text" name="name" id="meterid" placeholder="Enter Meter Id Number " size="20"></td>
	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from technicalreport";
$r=mysql_query($q,$conn);

echo "<table border='1' bgcolor='green'>
<tr>
<th>Technical<br>FName</th>
<th>Technical<br>LName</th>
<th>Kebele</th>
<th>House Number</th>
<th>Customer<br>Id</th>
<th>Meter Id</th>
<th>Task Performed<br>Date</th>
<th>Task Performed<br>Month</th>
<th>Task Performed<br>Year</th>
<th>Task Done</th>
<th>Action</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['Kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customer_id'] . "</td>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['task'] . "</td>";
 echo "<td><a rel='facebox' href='updateRRBtechni.php?customer_id=".$row['customer_id']."'>Edit </a>| ";
 echo "<a rel='facebox' href='deluser.php?customer_id=".$row['customer_id']."'>Del</td>";
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
 