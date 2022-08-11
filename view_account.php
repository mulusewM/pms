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
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<?php 
		include("Admin_menu.php");
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
<center><u><h4 style="color:blue; font-family:times new roman;">User Account Information</h4></u></center>

	<center><table class="datatable"border="1" width="600px" style="box-shadow:1px 1px 10px blue;">
						   <tr  style="background-color:#336699; color:white; font-family:times new roman;">
						   <th bgcolor="#336699" ><font color="white" size="2">User ID</th>
						   <th bgcolor="#336699" ><font color="white" size="2">First Name</th>
						   <th bgcolor="#336699" ><font color="white" size="2">Last Name</th>
						   <th bgcolor="#336699" ><font color="white" size="2">Sex</th>
						   <th bgcolor="#336699" ><font color="white" size="2">Phone Number</th>
						   <th bgcolor="#336699" ><font color="white" size="2">User Name</th>
						   <th bgcolor="#336699" ><font color="white" size="2">Role</th></tr>
					      <?php
						  
						   $res=mysql_query("select * from user_account,user where user_account.user_id=user.user_id");
                			  while($row=mysql_fetch_array($res))
			                   {
			                   echo'<tr>';
			                   echo'<td>';echo$row['user_id'];echo'</td>';
			                   echo'<td>';echo$row['Fname'];echo'</td>';
			                   echo'<td>';echo$row['Lname'];echo'</td>';  
							   echo'<td>';echo$row['sex'];echo'</td>';
							   echo'<td>';echo$row['phoneNumber'];echo'</td>';
							   echo'<td>';echo$row['userName'];echo'</td>';
							 
							   echo'<td>';echo$row['role'];echo'</td>';
							 
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
