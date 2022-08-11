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
 <script type="text/javascript"> <!--------------------------TO PREVENT BACK AFTER SIGN OUT PROCESS-----------------------
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
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
		 <li><p style="margin-left:200px;font: bold 20px times new roman;">Well Come To Administrator Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:220px;">logout</a></li>
		 	
         </ul>
		
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" valign="top" id="insides">

<?php 
		include("Admin_menu.php");
		?>



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
<center><u><h4 style="color:blue; font-family:times new roman;">Activate/Deactivate User's Account</h4></u></center>	
<table  border="1" cellpadding='4'   style="margin-left:65px;margin-top:10px;box-shadow:1px 1px 10px blue;width:500px;">
			<thead>
			
					
			
				<tr  style="background-color:#336699; color:white; font-family:times new roman;">
				<th>user Id</th>
				<th>user Name</th>
				
				<th>Role</th>
				
				<th>Action</th>
				
				
				</tr>
			</thead>
				<tbody>
				<?php
				include("connection.php");
				$result = mysql_query("SELECT * FROM user_account,user where user_account.user_id=user.user_id ");
				$count=mysql_num_rows($result);
					$i=0;
					while($row = mysql_fetch_array($result))
				  {
				    $id = $row['user_id'];
					$username=$row['userName'];
					$pass=$row['password'];
					$role=$row['role'];
					$stat=$row['status'];
					$i=$i+1;
					echo '<tr>';
					echo '<td>'.$id.'</td>';
					echo '<td>'.$username.'</td>';
					
					echo '<td>'.$role.'</td>';
					
					if($stat==0){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'deactivate.php?enable=".$id."'>
					<span style='border:1px solid transparent;padding:3px;border-radius:5px;color:white;background-color:green;' title='enabled' onclick='isendis();'>Deactivate</span></a></td>";
				
                     }
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'activate.php?disable=".$id."'>
				<span style='border:1px solid transparent;padding:3px;border-radius:5px;color:white;background-color:red;' title='disabled' onclick='isendis();'>Activate</span></a></td>";
				}
				

				}
			
				  echo '</tr>';
				?>	 
  
  
  
</table> 
	<br>	
	<br>
  </form>
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

