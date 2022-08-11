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
	 
<html>
<head>
<script src="aa.js" type="text/javascript"></script>

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
<tr><td>

<?php 
		include("header.php");
		?>
		
		</td></tr>
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
<?php 
		include("cashier_menu.php");
		?>
</td>
<!--End Of Sub menus-->
<!--Body section-->
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[0].value);
            div.style.display = 'block';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
		if(selectedOption == "6")
		{
			displayDiv(prefix,"6");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>

<td valign="top">
<br>
<br>
				<div>
				Select Report category:
				<select  onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">per day sells report</option>
					<option value="3">per week sells report</option>
					<option value="4">per month sells report</option>
					<option value="5">Annual sells report</option>
					
				</select>
				
				
				<br /><br />
				<center><table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
		<tr>
			<td >

	             <div id="div1" style="display:none;"></div>
<div id="div22">
<center><div>
					<img src="img/9.png"  width="50px" style="margin-top:40px;margin-left:-400px">
					<h3 style="margin-top:-43px; margin-right:-7px;">PHARMACY</h3>
					<img src="img/9.png"  width="50px" style="margin-top:-84px; margin-left:420px"></p></div></center>
				 
<div id="div2" style="display:none;">
	
					<form action="" method="post">
					
					<u><center><h4>Per Day sells Report</h4></center></u>
						<?php $date=date("Y-m-d");
						
						$totalCost = 0;
					    $totalCos =0;
						$tt = 0;
						?>
						<?php
							   include('connection.php');

	
	$s=mysql_query("select * from sold_drugs,store,stock,user where stock.drugID=store.drugID and stock.stock_id=sold_drugs.stock_id and 
	user.user_id=sold_drugs.soldby_id and soldby_id=$userid and `sold_date` BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 DAY)AND CURDATE( )");
    
   
    

	$rowcolor=0;
	$inttt=mysql_num_rows($s);
	         echo"<center>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" >';
			echo'<tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">Quantity</th>
            <th bgcolor="#336699" ><font color="white" size="2">payment</th> 			
			<th bgcolor="#336699" ><font color="white" size="2">Date</th>
			
			
			
			 
			</tr>';
			
			$rowcolor=0;
			

		 while($last=mysql_fetch_array($s))
    {
      $pay=	 $last['price'];
	  $cost= $last['unitCost'];
	  $quant=$last['sold_drug_quantity'];
	  $unit=$cost * $quant;
	  $tot=$totalCos + $unit;
	  $Totcost  = $totalCos + $tot;
    print ("<tr>");
	print ("<td><font size='2'>"  . $last['drugName']. "</td>");
	print ("<td><font size='2'>" . $last['sold_drug_quantity'] . "</td>");
	print ("<td><font size='2'>" . $last['price'] . "</td>");
    print ("<td><font size='2'>" . $last['sold_date'] . "</td>");	
	$Total=$totalCost = $totalCost + $Totcost;
	$totall=$tt = $tt + $pay;
	$profit=$totall - $Total;
	print ("</tr>");
	
	}
	print ("<tr>");
	print( "</table>");
	echo"</center>"	;
	echo"<br>";
	
	print( "<table>");
    echo "<font size='2' color= blue >" ."Total Revenue =" . $totall." " . "Birr".("<br>");
	echo "Total Cost =" . $Total." " . "Birr".("<br>") ;	
	echo "Profit = "." " .$profit." " . "Birr".("<br>")."</font>" ;
	print( "</table>");
	echo"<br>";
	
	echo "Report date:"." " .$date;												
						
						?>
					</form>					
					</div>
				
	<div id="div3" style="display:none;">
				
					<form action="" method="post">
					<u><center><h4>Per Week sells Report</h4></center></u>
						<?php $date=date("Y-m-d");
						$totalCost = 0;
					    $totalCos =0;
						$tt = 0;
						?>
						<?php
							   include('connection.php');

	
	$s=mysql_query("select * from sold_drugs,store,stock,user where stock.drugID=store.drugID and stock.stock_id=sold_drugs.stock_id and 
	user.user_id=sold_drugs.soldby_id and soldby_id=$userid and `sold_date` BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY)AND CURDATE( )");
    
   
    

	$rowcolor=0;
	$inttt=mysql_num_rows($s);
	         echo"<center>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">Quantity</th>
            <th bgcolor="#336699" ><font color="white" size="2">payment</th> 			
			<th bgcolor="#336699" ><font color="white" size="2">
			Date</th>
			
			
			
			 
			</tr>';
			
			$rowcolor=0;
			

		 while($last=mysql_fetch_array($s))
    {
      $pay=	 $last['price'];
	  $cost= $last['unitCost'];
	  $quant=$last['sold_drug_quantity'];
	  $unit=$cost * $quant;
	  $tot=$totalCos + $unit;
	  $Totcost  = $totalCos + $tot;
    print ("<tr>");
	print ("<td><font size='2'>"  . $last['drugName']. "</td>");
	print ("<td><font size='2'>" . $last['sold_drug_quantity'] . "</td>");
	print ("<td><font size='2'>" . $last['price'] . "</td>");
    print ("<td><font size='2'>" . $last['sold_date'] . "</td>");	
	$Total=$totalCost = $totalCost + $Totcost;
	$totall=$tt = $tt + $pay;
	$profit=$totall - $Total;
	print ("</tr>");
	
	}
	print ("<tr>");
	print( "</table>");
	echo"</center>"	;
	echo"<br>";
	
	print( "<table>");
    echo "<font size='2' color= blue style= times new romman>" ."Total Revenue =" . $totall." " . "Birr".("<br>");
	echo "Total Cost =" . $Total." " . "Birr".("<br>") ;	
	echo "Profit = "." " .$profit." " . "Birr".("<br>")."</font>" ;
	print( "</table>");
	echo"<br>";
	
	echo "Report date:"." " .$date;												
						
						?>
					</form>					
					</div>
<div id="div4" style="display:none;">
				
					<form action="" method="post">
					<u><center><h4>Per Month sells Report</h4></center></u>
						<?php $date=date("Y-m-d");
						$totalCost = 0;
					    $totalCos =0;
						$tt = 0;
						?>
						<?php
							   include('connection.php');

	
	$s=mysql_query("select * from sold_drugs,store,stock,user where stock.drugID=store.drugID and stock.stock_id=sold_drugs.stock_id 
	and user.user_id=sold_drugs.soldby_id and soldby_id=$userid and `sold_date` BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH)AND CURDATE()");
    
   
    

	
	$rowcolor=0;
	$inttt=mysql_num_rows($s);
	         echo"<center>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:30px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">Quantity</th>
            <th bgcolor="#336699" ><font color="white" size="2">payment</th> 			
			<th bgcolor="#336699" ><font color="white" size="2">
			Date</th>
			
			
			
			 
			</tr>';
			
			$rowcolor=0;
			

		 while($last=mysql_fetch_array($s))
    {
      $pay=	 $last['price'];
	  $cost= $last['unitCost'];
	  $quant=$last['sold_drug_quantity'];
	  $unit=$cost * $quant;
	  $tot=$totalCos + $unit;
	  $Totcost  = $totalCos + $tot;
    print ("<tr>");
	print ("<td><font size='2'>"  . $last['drugName']. "</td>");
	print ("<td><font size='2'>" . $last['sold_drug_quantity'] . "</td>");
	print ("<td><font size='2'>" . $last['price'] . "</td>");
    print ("<td><font size='2'>" . $last['sold_date'] . "</td>");	
	$Total=$totalCost = $totalCost + $Totcost;
	$totall=$tt = $tt + $pay;
	$profit=$totall - $Total;
	print ("</tr>");
	
	}
	print ("<tr>");
	print( "</table>");
	echo"</center>"	;
	echo"<br>";
	
	print( "<table>");
    echo "<font size='2' color= blue style= times new romman>" ."Total Revenue =" . $totall." " . "Birr".("<br>");
	echo "Total Cost =" . $Total." " . "Birr".("<br>") ;	
	echo "Profit = "." " .$profit." " . "Birr".("<br>")."</font>" ;
	print( "</table>");
	echo"<br>";
	
	echo "Report date:"." " .$date;												
						
						?>
					</form>	
			
					</div>	
<div id="div5" style="display:none;">
				
					<form action="" method="post">
					<u><center><h4>Annual sells Report</h4></center></u>
						<?php $date=date("Y-m-d");
						$totalCost = 0;
					    $totalCos =0;
						$tt = 0;
						?>
						<?php
							   include('connection.php');

	
	$s=mysql_query("select * from sold_drugs,store,stock,user where stock.drugID=store.drugID and stock.stock_id=sold_drugs.stock_id 
	and user.user_id=sold_drugs.soldby_id and soldby_id=$userid and `sold_date` BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 YEAR)AND CURDATE()");
    
   
    

	
	$rowcolor=0;
	$inttt=mysql_num_rows($s);
	         echo"<center>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:30px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">Quantity</th>
            <th bgcolor="#336699" ><font color="white" size="2">payment</th> 			
			<th bgcolor="#336699" ><font color="white" size="2">
			Date</th>
			
			
			
			 
			</tr>';
			
			$rowcolor=0;
			

		 while($last=mysql_fetch_array($s))
    {
      $pay=	 $last['price'];
	  $cost= $last['unitCost'];
	  $quant=$last['sold_drug_quantity'];
	  $unit=$cost * $quant;
	  $tot=$totalCos + $unit;
	  $Totcost  = $totalCos + $tot;
    print ("<tr>");
	print ("<td><font size='2'>"  . $last['drugName']. "</td>");
	print ("<td><font size='2'>" . $last['sold_drug_quantity'] . "</td>");
	print ("<td><font size='2'>" . $last['price'] . "</td>");
    print ("<td><font size='2'>" . $last['sold_date'] . "</td>");	
	$Total=$totalCost = $totalCost + $Totcost;
	$totall=$tt = $tt + $pay;
	$profit=$totall - $Total;
	print ("</tr>");
	
	}
	print ("<tr>");
	print( "</table>");
	echo"</center>"	;
	echo"<br>";
	
	print( "<table>");
    echo "<font size='2' color= blue style= times new romman>" ."Total Revenue =" . $totall." " . "Birr".("<br>");
	echo "Total Cost =" . $Total." " . "Birr".("<br>") ;	
	echo "Profit = "." " .$profit." " . "Birr".("<br>")."</font>" ;
	print( "</table>");
	echo"<br>";
	
	echo "Report date:"." " .$date;												
						
						?>
					</form>	
			
					</div>
				
					</div>
<center><button onclick="printContent('div22')">Print Content</button></center>	
					  
</td></tr></table></center><br><br> 	

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
