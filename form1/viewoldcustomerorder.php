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
<style type="text/css">
.a{
width:100px;
height:80px;
background-color:green;
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
 var customerid = document.getElementById('customerid');
 if (isNumeric( meterid, "Please Enter Valid  customerid!")) 
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
<form action="technicalSearchdatafromviewedoldcustomerorder.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search Old Customer Order From Table!</h3></center>
<center><table class="a">
<tr>
	<td><input type="text" name="name" id="customerid" placeholder="Enter customer id " size="20"></td>
	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from  oldcustomeordermaintenance";
$r=mysql_query($q,$conn);

echo "<table border='1' bgcolor='green'>
<tr>
<th>Id</th>
<th>Customer<br>FName</th>
<th>Customer<br>LName</th>
<th>Kebele</th>
<th>Housen Number</th>
<th>Customer Id</th>
<th>phonenumber</th>
<th>request</th>
<th>Action</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['kebele'] . "</td>";
  echo "<td>" . $row['housenumber'] . "</td>";
  echo "<td>" . $row['customerid'] . "</td>";
  echo "<td>" . $row['phonenumber'] . "</td>";
   //echo "<td>" . $row['Task Needed'] . "</td>";
  echo "<td>" . $row['request'] . "</td>";
 echo "<td><a rel='facebox' href='technicaloldcustomerreply.php?id=".$row['id']."'>Reply </a>| ";
 echo "<a rel='facebox' href='deloldcustomerorder.php?id=".$row['id']."'>Del</td>";
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
 