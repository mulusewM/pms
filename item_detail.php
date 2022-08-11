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
<?php
	include('connection.php');

	$sq20="select * from stock ,store where store.drugID=stock.drugID";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		$qty=$row['transfer_quantity'];
		$stockid=$row['stock_id'];
		$sk=$row['sellingPrice'];

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
       <div id="sses2">
	   
         <ul id="unique">
		 <li><p style="margin-left:276px;font: bold 20px times new roman;">Well Come To Cashier Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:190px;">Logout</a></li>
		 	
         </ul>
		
         </div>
</td>
</tr>
<!--End of main menus-->

<?php 
		include("cashier_menu.php");
		?>



<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>

<center><u><h4 style="color:blue; font-family:times new roman;">Please Add  Drugs Information to Cart</h4></u></center>
<?php 
include('connection.php');
                            							
	                        $sql = "select * from store,stock where store.drugID=stock.drugID and transfer_quantity >0";
	                        $query = mysql_query($sql);
		                    
                     if( $query)
		                {
				echo"<div style='margin-left:50px;margin-top:5px;'>";	
		         while($row=mysql_fetch_array($query))
		                {
			    
			?>
			
			<div  style ="float:left;border-left:2px solid blue;margin-left:2px;border-right:2px solid blue;border-top:2px solid blue;border-bottom:2px solid blue;" >			
	<br/>
	<form method="POST" action='cart.php?action="add"&id="<?php echo $row['drugID'];?>"'>
			
			     <p><font align="center" color="green"><?php  echo $row['drugName'];?></p>
			   
				<p  style="color:blue;"><?php  echo $row['sellingPrice']." Birr";?></p>
				<p>Quantity:<input type="number" name="val" value="1"  class="bt"></p>
				<input type='hidden' name='nam'value="<?php echo $row['drugName'];?>">
				<input type='hidden' name='hiden_price'value="<?php echo $row['sellingPrice'];?>">
				<input type='hidden' name='hidden_id'value="<?php echo $row['drugID'];?>">
				<input type='hidden' name='hidden_date'value="<?php $date=date("Y-m-d");echo $date;?>" >
				<input type='hidden' name='hidden_stock'value="<?php echo $row['stock_id'];?>">
				<input type='hidden' name='hidden_quantity'value="<?php echo $row['transfer_quantity'];?>">
			<input type = 'submit' name='addToCart' value="Add to Cart" class="btn-" style="margin-left:10%;">
	</form>
			 <br/> </div> 		   
	             <?php 
			   }
			}
			else{
			echo "error";
			}
         
					
		     ?>					
					
					</td></table>



	

 
<!--End Body of section-->

<!--Footer-->

<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                        
</body>
</html>
















