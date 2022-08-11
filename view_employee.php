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
<?php
include('connection.php');
;

$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}

	

								
		 
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
<?php 
		include("manager_menu.php");
		?>


</td>
<!--End Of Sub menus-->
<td valign="top">
<br>
<?php
 include('connection.php');
 
?>
<center><h4><u>Employees Information</u></h4>
	<table class="datatable"border="3" width="600px">
						   <tr>
						   <th bgcolor='#336699'><font color='white'>Full Name</th>
						   <th bgcolor='#336699'><font color='white'>Sex</th>
						   <th bgcolor='#336699'><font color='white'>Phone Number</th>
						   <th bgcolor='#336699'><font color='white'>Role</th>
						   
					      <?php
						  
						   $res=mysql_query("select * from user,user_account where user.user_id = user_account.user_id ");
                			  while($row=mysql_fetch_array($res))
			                   {
							    $role=$row['role'];
								if($role!="Manage"){
			                   echo'<tr>';
			                   print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");	
			                   echo'<td>';echo$row['sex'];echo'</td>';  
							   echo'<td>';echo$row['phoneNumber'];echo'</td>';
							   echo'<td>';echo$row['role'];echo'</td>';
							  
							 
			                   echo'</tr>';
			                  }}
							  
						mysql_close($con);	  
						   ?>
	
<div class="accdiv">

<!--Body section-->



  
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

