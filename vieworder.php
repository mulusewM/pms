<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php
		
		include("headerr.php");
	
?>

<html>
<head>

<title>PHARMACY</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

 <?php 
		include("header.php");
		?>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2">
	   
        <ul id="unique">
		 <li><p style="margin-left:200px;font: bold 20px times new roman;">Well Come To Store Coordinator Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:160px;">Logout</a></li>
		 	
         </ul>
		
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<?php
 include('connection.php');
 
?>
<center><h4 style="font-family:times new roman;color:blue"><u>Ordered Drugs</u></h4>
	<table class="datatable"border="1" width="600px">
						   <tr>
						   <th bgcolor='#336699' height="30px"><font color='white'>id</th>
						   <th bgcolor='#336699'><font color='white'>drug_name</th>
						   <th bgcolor='#336699'><font color='white'>order_date</th>
						   <th bgcolor='#336699'><font color='white'>Drug_Type</th>
						   
						   <th bgcolor='#336699'><font color='white'>Quantity</th>
						    <th bgcolor='#336699'><font color='white'>orderid</th>
						   
					      <?php
						  
						   $res=mysql_query("select * from  manorder where manorder.id=user.user_id ");
                			  while($row=mysql_fetch_array($res))
			                   {
							    $qunt=$row['quantity'];
								
			                   echo'<tr>';
			                   echo'<td>';echo$row['id'];echo'</td>';
							    echo'<td>';echo$row['drugname'];echo'</td>';
			                   echo'<td>';echo$row['orderdate'];echo'</td>';
			                   echo'<td>';echo$row['drugType'];echo'</td>';  
							   
							   echo'<td>';echo$row['quantity'];echo'</td>';
							  
							   echo'<td>';echo$row['orderid'];echo'</td>';
							 
			                   echo'</tr>';
			                  }
							  
						mysql_close($con);	  
						   ?>
						</table></center>

</td>
</tr>
</table>
<!--End Body of section-->
</table>

<!--Footer-->

<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                        
</body>
</html>
