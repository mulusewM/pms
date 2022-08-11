<?php session_start();?>

<?php
		
		include("headerr.php");
	
?>
<?php
	include('connection.php');

	$sq20="select * from stock ,store where store.drugID=stock.drugID";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		$qty=$row['transfer_quantity'];

	}
?>
<?php
	include('connection.php');

	$sq50="select * from stock,store WHERE stock.drugID=store.drugID and transfer_quantity >0";
	   
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
<br><br>
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;width:400px;"> <tr><td>
<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px" face="times new romman"; ><center>Prepare Bill For Customer</center></font></strong>
 </div>
<table align="center" ">



<table cellpadding="6" cellspacing="5" border="0" width="100%">
  <?php	
  $fname = '';
  $lname = '';
	
	$errors=array();
        
	     if(!empty($_SESSION['cart'])) 
		 {
			 foreach($_SESSION['cart'] as $key=>$value)
			 {
				$total= $_SESSION['tp'];
				$quantity=$value["item_quantity"];
				$name=$value["item_name"];
			    $stock=$value["stock_id"];
                $qty= $value["stock_qty"];
                $dname= $value["item_name"];				
			 
			}
		 }
if(isset($_POST['insert']))
{

if(!preg_match('/^[a-zA-Z]+$/',$fname) || empty($fname) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $fname) || preg_match( '/[\s]+/',$fname)){
			array_push($errors,"first name must be character!!");
			}
if(!preg_match('/^[a-zA-Z]+$/',$lname) || empty($lname) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $lname) || preg_match( '/[\s]+/',$lname)){
			array_push($errors,"last name must be character!!");
			}}		 
		 ?>
		 

<form action="print_bill.php" method='POST'>
  <tr>
<td> First Name:</td>
<td><input type="text" name="fname" value="" placeholder="Enter first Name" required pattern="[A-Z a-z]+"></td>
</tr>
<tr>
<td > Last Name:</td>
<td><input type="text" name="lname" value="" placeholder="Enter Second Name" required pattern="[A-Z a-z]+" ></td>
</tr>
<tr>
<td > Date:</td>
<td><input type="date" name="det" value="<?php $date=date("Y-m-d");echo $date;?>"  ></td>
</tr>
<tr><td>Total Price</td><td><?php echo $total;?></td></tr>
<tr><td>
<td><input type="submit" name="submit" Value="submit">
<input type="submit" name="clear" Value="Clear">

</td></tr>
			
	</form>				
					</table><br>
					</tr></td></table>


<?phpecho $message;?>
<?php
 
include('errors.php');
?>			

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



























