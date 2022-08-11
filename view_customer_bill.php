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
<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:0px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:150px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;">PHARMACY MANAGEMENT SYSTEM</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->	
				
         <tr>
<td colspan="3" width="750px">
<div id="sse2">
        <?php 
		include("menu.php");
		?>
    </div>
</td>
</tr>
<!--End of main menus-->

<?php 
		include("cashier_menu.php");
		?>

</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<?php
 include('connection.php');
 
?>
<center><h4><u>Customer Bill Information</u></h4>
	<table class="datatable"border="3" width="600px">
						   <tr>
						    <th bgcolor='#336699'><font color='white'>customer ID</th>
						   <th bgcolor='#336699'><font color='white'>Full Name</th>
						   <th bgcolor='#336699'><font color='white'>Payment</th>
						   <th bgcolor='#336699'><font color='white'>Date</th>
						    <th bgcolor='#336699'><font color='white'>view Detail</th>
						  
						   
					      <?php
						  
						   $res=mysql_query("select * from customer_bill");
                			  while($row=mysql_fetch_array($res))
			                   {
							     $id = $row['cus_id'];
							  
			                   echo'<tr>';
							   echo'<td>';echo$row['cus_id'];echo'</td>';
			                   print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");	
			                   echo'<td>';echo$row['total'];echo'</td>';  
							   echo'<td>';echo$row['date'];echo'</td>';
							   echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'detail.php?enable=".$id."'>
					<span style='border:1px solid transparent;padding:3px;border-radius:5px;color:white;background-color:green;' title='enabled' onclick='isendis();'> Detail</span></a></td>";
							 
			                   echo'</tr>';
			                  }
							  
						mysql_close($con);	  
						   ?>	
<div class="accdiv">


  
</table> 
	
  
<!--Php Script-->  
	

</div>
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

