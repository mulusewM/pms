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
		
         </div></div>
</td>
</tr>

<!--End of main menus-->
<tr>
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<td>
<!--Sub menus-->
 
		<li><a href="vieworderr.php"><b><u><p style="margin-left:5px;font: bold 20px times new roman;color:black">vieworder</p></u></b></a></li>
         <li><a href="view_payment.php"><b><u><p style="margin-left:5px;font: bold 20px times new roman;color:black">view_payment</p></u></b></a></li>
		



</td>
</tr>
</table>
<!--End Of Sub menus-->
<!--Body section-->

<td valign="top">
<?php
 include('connection.php');
 
?>

 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<h4><u> View drug order</u></h4>
<div class="table-responsive">
	 <center><table style="margin-right:400px;class="datatable" border="3" width="600px" >
	                       <thead>
						   <tr>
						   <th bgcolor='#336699'><font color='white'>id</th>
						   <th bgcolor='#336699'><font color='white'>drugname</th>
						   <th bgcolor='#336699'><font color='white'>drugtype</th>
						  <th bgcolor='#336699'><font color='white'>quantity</th>
						  <th bgcolor='#336699'><font color='white'>Orderdate</th>
						   <th bgcolor='#336699'><font color='white'>Orderid</th>
						   <th bgcolor='#336699'><font color='white'>action</th>
						   </tr>
						   </thead>
							<tbody>
						    <?php
						  
						   $res=mysql_query("select * from manorder") or die(mysql_error());
						   $request_count = mysql_num_rows($res);
                			  while($row=mysql_fetch_array($res)){
			                    ?>
			                   <tr>
			                   <td><?php echo $row['id'];?></td>
			                   <td><?php echo $row['drugname'];?></td>
							   <td><?php echo $row['drugtype'];?></td>
			                   <td><?php echo $row['quantity'];?></td>
							   <td><?php echo $row['orderdate'];?></td>
                               <td><?php echo $row['orderid'];?></td>							   

<td>
<form method="post" action="">


								<input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
								<input type="hidden" name="order_id" value="<?php echo $row['orderid']; ?>">
								<input type="hidden" name="drugname" value="<?php echo $row['drugname']; ?>">

<button name="accept" class="btn btn-primary">
							<i class="fa fa-check"></i> Accept</button>
							<button name="delete" class="btn btn-danger">
							<i class="glyphicon glyphicon-remove"></i> Reject</button>
</form>
</td>
</tr>
<?php 
							  }						
							if ($request_count <= 0){
								echo '
									<table style="float:right;">
										<tr>
											<td style="padding:10px;" class="alert alert-danger">No Request!</td>
										</tr>
									</table>
								';
							} 							
							?>
									<?php
								if (isset($_POST['accept'])) {
									
									
									$user_id= $_POST['user_id'];
									$drugname= $_POST['drugname'];
									$order_id= $_POST['order_id'];
									
									mysql_query("INSERT INTO order_response(id,drugname,order_id,response,response_date)
									VALUES('$user_id','$drugname','$order_id','Your drug order request accepted.',NOW())") or die (mysql_error());
								mysql_query ("delete from manorder WHERE id= '$id'  ") or die (mysql_error());
								
								
							?>
									<script>
										window.location="supplier.php?";
									</script>
									<?php 
																}
																
							?>
									
									<?php
								if (isset($_POST['delete'])) {
									
									
									$user_id= $_POST['user_id'];
									$drugname= $_POST['drugname'];
									$order_id= $_POST['order_id'];
									mysql_query("INSERT INTO order_response(id,drugname,order_id,response,response_date)
									VALUES('$user_id','$drugname','$order_id','Your drug order request not accepted.',NOW())") or die (mysql_error());
								mysql_query ("delete from manorder WHERE id= '$id'") or die (mysql_error());
								
								
							?>
									<script>
										window.location="vieworderr.php";
									</script>
								<?php
								}
								
								
                              ?>
							 
							  </tbody>
							   
							  </table>
							 </center>
							 
							  </div>
							  
							  </td>
							  </tr>
	
<!--end of body section-->
</table>  						  
<!--Footer-->
<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                      
</body>
</html>

