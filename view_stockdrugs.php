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
        <?php 
		include("menu.php");
		?>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
 <?php 
		include("pharmacist_menu.php");
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
<center><h4><u> Drugs information in the Stock</u></h4></center>
	<center><table class="datatable"border="3" width="600px">
						   <tr>
						   <th bgcolor='#336699'><font color='white'>Drug ID</th>
						   <th bgcolor='#336699'><font color='white'>Drug Name</th>
						   <th bgcolor='#336699'><font color='white'>Drug Type</th>
						   <th bgcolor='#336699'><font color='white'>Manu. Date</th>
						   <th bgcolor='#336699'><font color='white'>Expire Date</th>
						   <th bgcolor='#336699'><font color='white'>Quantity</th>
						  
						   <th bgcolor='#336699'><font color='white'>Selling Price</th></tr>
						  <?php $date=date("d-m-y");?>
					      <?php
						  
						   $res=mysql_query("select * from store,stock where store.drugID=stock.drugID ");
                			  while($row=mysql_fetch_array($res))
			                   {
			                   echo'<tr>';
			                   echo'<td>';echo$row['drugID'];echo'</td>';
			                   echo'<td>';echo$row['drugName'];echo'</td>';
			                   echo'<td>';echo$row['drugType'];echo'</td>';  
							   echo'<td>';echo$row['manuDate'];echo'</td>';
							   echo'<td>';echo$row['expireDate'];echo'</td>';
							   echo'<td>';echo$row['transfer_quantity'];echo'</td>';
							 
							   echo'<td>';echo$row['sellingPrice'];echo'</td>';
							 
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

