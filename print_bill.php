
<?php
	include("connection.php");  
 session_start();
 $uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
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
<script type="text/javascript">
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
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
<div id="div22">
<br><br>
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;width:400px;"> <tr><td>
<center><div>
					<img src="img/9.png"  width="50px" style="margin-top:35px;margin-left:-300px">
					<h4 style="margin-top:-43px; margin-right:-7px;">PHARMACY</h4>
					<img src="img/9.png"  width="50px" style="margin-top:-60px; margin-left:310px"></p></div></center>
  <?php	
        
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
			 
		 }?>
<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $message="";
$messag=""; 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date= $_POST['det'];

}
       
if(isset($_POST['submit']))
{
	if($quantity<=$qty)
	{


$sql = "insert into customer_bill( Fname, Lname, date,total,user_id)VALUES
        ('$fname','$lname','$date','$total','$userid')";
	$sqq1=mysql_query($sql,$con);
	$s="select * from customer_bill";
	$ss1=mysql_query($s,$con);
	while($row=mysql_fetch_array($ss1))
		{
			$cusid=$row['cus_id'];
		}
		
	if(!empty($_SESSION['cart'])) 
		 {
			 foreach($_SESSION['cart'] as $key=>$value)
			 {
			    $id=$value["item_id"];
	            $quantity=$value["item_quantity"];
			    $stock=$value["stock_id"];
                $date= $value["sold_date"];
				$qty= $value["stock_qty"];
				$dname= $value["item_name"];
                $tot=($value["item_quantity"]*$value["item_price"]);
			
$sq2= "insert into sold_drugs( sold_drug_quantity, price, sold_date, soldby_id,stock_id)VALUES
        ('$quantity','$tot','$date','$userid','$stock')";
       $sqq2=mysql_query($sq2,$con);
	$s1="select * from sold_drugs";
	$sss2=mysql_query($s1,$con);
	while($row=mysql_fetch_array($sss2))
		{
			$soldid=$row['sold_drug_id'];
		}   	
$ss="insert into customer_buy_drugs(cuss_id,solddrug_id)VALUES('$cusid','$soldid')";
     $ss1=mysql_query($ss,$con);	   
$sq3="update stock set transfer_quantity=transfer_quantity-'$quantity' where drugID='$id'";
$sqq3=mysql_query($sq3,$con);
	   
}}	   
if($sqq2 and $sqq3){
		echo"";
	   
		}
		else
		{
		$message="not registered ";
		}
		}
			
       else{
	   echo $name." is insufficent you have only".$qty;
	   }
	
	   
	   }
	   
	   echo "<table>";
	 
	    if(!empty($_SESSION['cart'])) 
		 {
	   foreach($_SESSION['cart'] as $key=>$value)
			 {
			 $name=$value["item_name"];
	   
}}
	   echo "<tr>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Date"."</td>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$date."</td>". "</tr>";
	   echo "<tr>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Full Name"."</td>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$fname."   ".$lname."</td>"."</tr>";
	   
	   echo "<tr>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Total price"."</td>"."<td>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$total."</td>"."</tr>";
	       
	    echo "</table>";
	   }
	   echo "<br>";
	   echo "<br>";
		mysql_close($con);
		
		?>
		</table>
		</div>
		<center><button onclick="printContent('div22')">Print Content</button></center>	
		
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



























