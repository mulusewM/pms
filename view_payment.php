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
	   
         <u id="unique">
		 
		  <li><a href="logout.php" id="log" style="margin-left:750px;">logout</a></li>
		 	
         </ul>
		
         </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<td>
<!--Sub menus-->
 	<li><a href="vieworderr.php"><u><p style="margin-left:5px;font: bold 20px times new roman;color:black">vieworder</p></u></a></li>
     <li><a href="view_payment.php"><b><u><p style="margin-left:5px;font: bold 20px times new roman;color:black">view_payment</p></u></b></a></li>



</td>
</tr>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<?php
 include('connection.php');
 
?>
<center><h4><u> Payment for drug's order</u></h4></center>
	<center><table class="datatable"border="3" width="600px">
						   <tr>
						   <th bgcolor='#336699'><font color='white'>drugname</th>
						   <th bgcolor='#336699'><font color='white'>invoice_no</th>
						   <th bgcolor='#336699'><font color='white'>payamount</th>
						   <th bgcolor='#336699'><font color='white'>paytype</th>
						  <th bgcolor='#336699'><font color='white'>serial_no</th>
						   
					      <?php
						  
						   $res=mysql_query("select * from payment ");
                			  while($row=mysql_fetch_array($res))
			                   {
			                   echo'<tr>';
							   echo'<td>';echo$row['drugname'];echo'</td>';
			                   echo'<td>';echo$row['invoice_no'];echo'</td>';
			                   echo'<td>';echo$row['payamount'];echo'</td>';
			                   echo'<td>';echo$row['paytype'];echo'</td>'; 
							   echo'<td>';echo$row['serial_no'];echo'</td>';
			                  
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

