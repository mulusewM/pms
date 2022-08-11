<html>
<head>
<!--<title>billoficerviewmeterreaderreport</title>-->
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
width:90x;
height:60px;
background-color:#FFFFFF;
margin:0 auto;
margin-top:40px;
padding-top: 10px;
padding-left: 50px;
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
<body>
<br><br>
<form action="billoficerserchdatafromtable.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search Data From Table</h3></center>
<center><table class="a">
<tr>
	<td><input type="text" name="name" id="meterid" placeholder="Enter Meter Id" size="20"></td>
	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
<center><h3>Billofficer Data Table</h3></center>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from consumtionpayedcustomer";
$r=mysql_query($q,$conn);

echo "<table border='1' bgcolor='green'>
<tr> 
<th bgcolor='green'>meter<br>id</th>      
<th bgcolor='green'>Customer<br>First Name</th>
<th bgcolor='green'>Customer<br>Last Name</th>
<th bgcolor='green'>Kebele</th>
<th bgcolor='green'>House <br>Number</th> 
<th bgcolor='green'>Date</th>
<th bgcolor='green'>Month</th>
<th bgcolor='green'>Year</th>
<th bgcolor='green'>Previous<br>Reading</th>   
<th bgcolor='green'>Present<br>Reading</th>
<th bgcolor='green'>Action</th><br>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['meterid'] . "</td>";
  echo "<td>" . $row['customerfirstname'] . "</td>";
  echo "<td>" . $row['customerlastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['previous_Reading'] . "</td>";
  echo "<td>" . $row['present_Reading'] . "</td>";
  //echo "<td>" . $row['Action'] . "</td>";
 echo "<td><a rel='facebox' href='calculatebill.php?meterid=".$row['meterid']."'>calculete cost 0f Bill<br></a>|";
 echo "<a href='viewpayment.php?meterid=".$row['meterid']."'>Generate Bill<br></td>";
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
 