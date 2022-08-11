
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
		 <li><p style="margin-left:276px;font: bold 20px times new roman;">Well Come To Manager Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:190px;">Logout</a></li>
		 	
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
					<option value="2">Available Drugs in The store</option>
					<option value="3">Available Drugs in The stock</option>
					<option value="4">soled Drugs information</option>
					<option value="5">Expired drugs information</option>
					
				</select>
				
				
				<br /><br />
				<center><table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
		<tr>
			<td >
<div id="div22">
<center><div>
					<img src="img/9.png"  width="50px" style="margin-top:40px;margin-left:-400px">
					<h3 style="margin-top:-43px; margin-right:-7px;">PHARMACY</h3>
					<img src="img/9.png"  width="50px" style="margin-top:-84px; margin-left:420px"></p></div></center>
	             <div id="div1" style="display:none;"></div>	
			
				<div id="div2" style="display:none;">
				
					<form action="" method="post">
					<u><center><h4>Available Drugs in the Store</h4></center></u>
						<?php
							   include('connection.php');

						
	$sel="SELECT * FROM store, user where store.drugID= user.user_id";
	$sql=mysql_query($sel);
	
			
			
			$rowcolor=0;
			echo"<center>"	;
			$intt=mysql_num_rows($sql);
			echo"<br>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">manufactured Date</th> 
			<th bgcolor="#336699" ><font color="white" size="2">
			Expired Date</th><th bgcolor="#336699" >
			<font color="white" size="2">Quantity</th><th bgcolor="#336699" >
			<font color="white" size="2">Recoded by</th>
			
			 
			</tr>';
			while($row=mysql_fetch_array($sql)){
			$quant=$row["quantity"];
			$dn=$row["drugName"];
			if($quant>0){
    print ("<tr>");
	print ("<td><font size='2'>" . $row['drugName'] . "</td>");
	print ("<td><font size='2'>" . $row['manuDate'] . "</td>");
    print ("<td><font size='2'>" . $row['expireDate'] . "</td>");	
	print ("<td><font size='2'>" . $row['quantity'] . "</td>");
	print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");
	print ("</tr>");
	}
	
	
	}
	print( "</table>");
	echo"</center>"	;					
	echo"<br>";
	echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp; Type of drugs are recorded in the store</font>";
													
						
						?>
					</form>
					</div>
					
	<div id="div3" style="display:none;">
					<form action="" method="post">
					<u><center><h4>Available Drugs in the Stock</h4></center></u>
						<?php
							   include('connection.php');

	
	$sel="select * from store , stock,user where stock.drugID=store.drugID and stock.user_id=user.user_id";
	$sql=mysql_query($sel);
	$rowcolor=0;
	echo"<center>"	;
	$int=mysql_num_rows($sql);
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">manufactured Date</th> 
			<th bgcolor="#336699" ><font color="white" size="2">
			Expired Date</th><th bgcolor="#336699" >
			<font color="white" size="2">Quantity</th><th bgcolor="#336699" >
			<font color="white" size="2">Moved by</th>
			
			 
			</tr>';
			while($row=mysql_fetch_array($sql)){
			$quant=$row["transfer_quantity"];
			
			if($quant>0){
    print ("<tr>");
	print ("<td><font size='2'>" . $row['drugName'] . "</td>");
	print ("<td><font size='2'>" . $row['manuDate'] . "</td>");
    print ("<td><font size='2'>" . $row['expireDate'] . "</td>");	
	print ("<td><font size='2'>" . $row['transfer_quantity'] . "</td>");
    print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");	
	print ("</tr>");
	}}
	
	
	print( "</table>");
	echo"</center>"	;					
	echo"<br>";
	echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$int."&nbsp; Type of drugs are Available in the stock</font>";
								
						
						?>
					</form>					
					</div>	
	<div id="div4" style="display:none;">
					<form action="" method="post">
					<u><center><h4>Sold Drugs Information</h4></center></u>
						<?php
							   include('connection.php');

	
	$sel="SELECT * FROM store,stock,sold_drugs,user where stock.drugID=store.drugID and user.user_id=sold_drugs.soldby_id and stock.stock_id=sold_drugs.stock_id";
	$sql=mysql_query($sel);
	$rowcolor=0;
	echo"<center>"	;
	$inttt=mysql_num_rows($sql);
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">manufactured Date</th> 
			<th bgcolor="#336699" ><font color="white" size="2">
			Expired Date</th><th bgcolor="#336699" >
			<font color="white" size="2">Quantity</th><th bgcolor="#336699" >
			<font color="white" size="2">sold by</th>
			
			 
			</tr>';
			
			$rowcolor=0;
			$intt=mysql_num_rows($sql);
			echo"<br>";
			
			while($row=mysql_fetch_array($sql)){
    print ("<tr>");
	print ("<td><font size='2'>" . $row['drugName'] . "</td>");
	print ("<td><font size='2'>" . $row['manuDate'] . "</td>");
    print ("<td><font size='2'>" . $row['expireDate'] . "</td>");	
	print ("<td><font size='2'>" . $row['sold_drug_quantity'] . "</td>");
	print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");
	print ("</tr>");
	}
	print( "</table>");
	echo"</center>"	;					
	echo"<br>";
	echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp; Type of drugs are Available in the stock</font>";
													
						
						?>
					</form>					
					</div>
	<div id="div5" style="display:none;">
					<form action="" method="post">
					<u><center><h4>Expired drugs removed from store and stock</h4></center></u>
						<?php
							   include('connection.php');

	
	$sel="select * from store , expired_drugs,user where store.drugID=expired_drugs.drug_id and expired_drugs.removedby_id=user.user_id";
	$sql=mysql_query($sel);
	$rowcolor=0;
	echo"<center>"	;
	$int=mysql_num_rows($sql);
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Drug Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">manufactured Date</th> 
			<th bgcolor="#336699" ><font color="white" size="2">
			Expired Date</th><th bgcolor="#336699" >
			<font color="white" size="2">Quantity</th>
			<th bgcolor="#336699" >
			<font color="white" size="2">Removed by</th>
			
			 
			</tr>';
			while($row=mysql_fetch_array($sql)){
			$quant=$row["expire_drug_quantity"];
			
			if($quant>0){
    print ("<tr>");
	print ("<td><font size='2'>" . $row['drugName'] . "</td>");
	print ("<td><font size='2'>" . $row['manuDate'] . "</td>");
    print ("<td><font size='2'>" . $row['expireDate'] . "</td>");	
	print ("<td><font size='2'>" . $row['expire_drug_quantity'] . "</td>");
    print ("<td><font size='2'>" . $row['Fname'] ." ". $row['Lname'] . "</td>");	
	print ("</tr>");
	}
	else{
	echo $dn." "."is not Available in the store";
	}
	}
	print( "</table>");
	echo"</center>"	;					
	echo"<br>";
	echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$int."&nbsp; Type of drugs are Available in the stock</font>";
								
						
						?>
					</form>					
					</div>
</div>					
					
<center><button onclick="printContent('div22')">Print Content</button></center>	


  
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

