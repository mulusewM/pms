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
	
	$sq20="select * from store WHERE quantity >0";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		
	}

?>
<?php
	include('connection.php');

	$sq50="select * from store WHERE quantity >0";
	   
	$sq2=mysql_query($sq50,$con);
	if($sq50)
	{
	}
	else
	{
		echo "Error";
	
	}
	$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}

?>

<?php
$message="";
$messag="";
$messagg="";
if(isset($_POST['enter']))
{
		$dn = $_POST['nam'];  
        $val = $_POST['val'];
        $tdate = $_POST['tdate'];
			
	   include('connection.php');

	$sq20="select * from store WHERE drugID = $dn";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		$qty=$row['quantity'];
		$manu=$row['manuDate'];
		$exdate=$row['expireDate'];
		$sell=$row['sellingPrice'];
		
	}	  
	  
	  if($val<=$qty)
	{
	   
	   $sell=$row['SellingPrice'];
	   
	   $sqq="update stock set transfer_quantity=(transfer_quantity + $val),manuDate='$manu',expireDate='$exdate',transfered_date='$tdate' WHERE drugID = '$dn' ";
	   $sqq1="update store set quantity=(quantity-$val) WHERE drugID='$dn'";
	   $sq3=mysql_query($sqq,$con);
	   $sq4=mysql_query($sqq1,$con);
	   if($sq3 and $sq4)
	   {
	   $message="Sucessful";
	   }
	   else
	   {
	   $messag="Unsucessful";
	   }
	}
	else
	{
	   $messagg="Insufficient you have only  ".$qty;
	}
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
	   
         <ul id="unique">
		
		  <li><a href="logout.php" id="log" style="margin-left:750px;">Logout</a></li>
		 	
         </ul>
		
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->

<?php 
		include("storecoordinator.php");
		?>


</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br><br>
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;width:400px;">
<tr>
	<td>
		<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
			<strong><font color="white" size="4px" face="times new romman"; ><center>Move Drugs from Store to Stock</center></font></strong>
		</div>
		<table align="center" ">
			<tr>
		

				<td>
					<form action="" method='POST'>
					
						<table>
						<br>
							<tr>
							
							    <td><font face="times new roman"  size="3">Drug ID:</td>
								<td>
									<select type="text" name="nam"  placeholder="Enter drug name" required x-moz-errormessage="Please enter the dragname">
										<?php
										while($row=mysql_fetch_array($sq2))
										{
										echo "<option value=".$row['drugID'].">".$row['drugID']."</option>";
										}
										?>
									</select>
									
								</td>
							</tr>
								<tr><td ></td></tr>
								<tr>
								<td > <font face="times new roman"  size="3">Quantity:</td>
								<td><input type="number" name="val"  placeholder="Enter number of drag" required x-moz-errormessage="Please enter the block no"/></td>
								</tr><tr><td height="10"></td></tr><br>
								<tr>
									<td class='para1_text'><b>Transfer date:</b></td><td><input type="date" name="tdate" value="<?php $date=date("Y-m-d");echo $date;?>" >
								</tr>
								<tr><td></td>
								<td><input type="submit" value="Enter" name="enter" style="cursor:pointer;" class="button_example"/>
								<input type="reset" value="clear"  style="cursor:pointer;" class="button_example"/></td>
								</tr>
	   
	   
	   			
			</tr>
			<tr><td>
			<?php 
	   echo $message;
	   echo $messag;
	   
	   
	   
	   ?>
			</td></tr>
			<tr>
			<?php 
	  
	   echo $messagg;
	   
	   
	   ?>
			</tr>
						</table>
					</form>
					</table><br>
					</tr></td></table>



	

</td>
</tr>
</table>
<!--End Body of section-->

<!--Footer-->

<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                        
</body>
</html>
