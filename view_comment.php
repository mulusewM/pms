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
<!--Sub menus-->
 <?php 
		include("manager_menu.php");
		?>



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<?php
 include('connection.php');
 
?>
<center><h4><u> Supplier's comment for drug order</u></h4></center>
	<center><table class="datatable"border="3" width="600px">
						   <tr>
						   <th bgcolor='#336699'><font color='white'>name</th>
						   <th bgcolor='#336699'><font color='white'>email</th>
						   <th bgcolor='#336699'><font color='white'>comment</th>
						  
					      <?php
						  
						   $res=mysql_query("select * from comment ");
                			  while($row=mysql_fetch_array($res))
			                   {
			                   echo'<tr>';
			                   echo'<td>';echo$row['name'];echo'</td>';
			                   echo'<td>';echo$row['email'];echo'</td>';
			                   echo'<td>';echo$row['comment'];echo'</td>';  
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

