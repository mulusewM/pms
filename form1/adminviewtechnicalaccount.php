<html>
<head>
<title>adminviewtechnicalaccount</title>
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
<body>
<br><br><br>
<h3><center>Technician Account</center></h3>
<?php
$conn = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("water44", $conn) or die("Can not select Database");
$q = "select * from creataccounttechnicalsupervisor";
$r=mysql_query($q,$conn);

echo "<center>";
echo "<table border='1' bgcolor='green'>
<tr>       
<th bgcolor='skyblue'>Id</th>
<th bgcolor='skyblue'>Employee ID</th>       		                                    		
<th bgcolor='skyblue'>First Name</th>
<th bgcolor='skyblue'>Last Name</th>
<th bgcolor='skyblue'>email</th> 
<th bgcolor='skyblue'>user_name</th>  
<th bgcolor='skyblue'>password</th>   
<th bgcolor='skyblue'>Security Code</th> 
<th bgcolor='skyblue'>Action</th>
</tr>";

while($row = mysql_fetch_array($r))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['employeeid'] . "</td>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['user_name'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['pinnumber'] . "</td>";
 echo "<td><a rel='facebox' href='adminupdatetechnicalaccountandview.php?id=".$row['id']."'>Edit</a>|";
 echo "<a rel='facebox' href='admindeletetechnoicalaccount.php?id=".$row['id']."'>Del</td>";
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
 