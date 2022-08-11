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
	   
        <ul id="unique">
		<?php 
		include("menu.php");
		?>
		 	</ul>
		
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->

<?php 
		include("storecoordinator.php");
		?>

</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>

<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
				<td>
						<form action="" method='POST'>
						<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Check Expired Date</center></font></strong>
 </div>
						<table>
						<br><br>
							<tr>
								
								<td>current date:<input type="date" name="searchs" value="<?php $date=date("Y-m-d");echo $date;?>"/></td></tr>
								<tr><td></td></tr>
								<tr>
								<td>
								<center><input type="submit" value="Check" name="search"  class="button_example"/>
							</center>
								
                                </td>
								
							</tr>
						</table>
					</form>
					</table><br>
<?php
	include('connection.php');
$msg="";	
if ($_SERVER["REQUEST_METHOD"] == "POST") {				


	
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinall",$con);
$con=mysql_connect("localhost","root","")or die ("unable to connect".mysql_error());
mysql_select_db("pharmacyfinall",$con);					   
if(isset($_POST['search']))
    {
                    
					$date=$_POST['searchs'];
					
					
					$sql= "SELECT * FROM store where ExpireDate < '$date'";
					$result=mysql_query($sql,$con);
					$count=mysql_num_rows($result);
					if($count < 1)
					{
					echo('<p class="wrong">There is no expired drugs</p>');
					
					}
					else
					{?>
					<center>
					
	<table style='width:620px;height:50px;border-radius:10px;border-radius:10px;' border='2' align='center'>
<tr>

<th bgcolor='#336699'><font color='white'>Drug ID</th> 
<th bgcolor='#336699'><font color='white'>Drug Name</th>
<th bgcolor='#336699'><font color='white'>Drug Type</th>
<th bgcolor='#336699'><font color='white'>Manufacture Date</th>
<th bgcolor='#336699'><font color='white'>Expired Date</th>
<th bgcolor='#336699'><font color='white'>Quantity</th>
<th bgcolor='#336699'><font color='white'>Unit cost</th>
<th bgcolor='#336699'><font color='white'>selling price</th>

</tr>
<?php
while($row = mysql_fetch_array($result))
  {
  $quant=$row["quantity"];
  $exdate=$row["expireDate"];
            if($exdate < $date and $quant>0){
            
            
           
			
  
  
  
  echo'<tr>';
			                   echo'<td>';echo$row['drugID'];echo'</td>';
			                   echo'<td>';echo$row['drugName'];echo'</td>';
			                   echo'<td>';echo$row['drugType'];echo'</td>';  
							   echo'<td>';echo$row['manuDate'];echo'</td>';
							   echo'<td>';echo$row['expireDate'];echo'</td>';
							   echo'<td>';echo$row['quantity'];echo'</td>';
							   echo'<td>';echo$row['unitCost'];echo'</td>';
							   echo'<td>';echo$row['sellingPrice'];echo'</td>';
							 
			                   echo'</tr>';
?>

  

<?php
}

}?>
<table>
<tr><td>
<form action="" method='POST'>
<input type="hidden" name="searchs" value="<?php $date=date("Y-m-d");echo $date;?>"/>
<input type="submit" value="Remove" name="remove"  class="button_example"/>

</form>
</td></tr></table>
</div>
<?php
}

}
}
?>
</table></center>
<?php
echo $msg;
           if(isset($_POST['remove'])){
			$cd = $_POST['searchs'];  
            
			
	   include('connection.php');
	   $sq="select * from store WHERE ExpireDate < '$cd'";
	   $sq2=mysql_query($sq,$con);
	   while($row=mysql_fetch_array($sq2)){  
        $quant=$row["quantity"];
	    $date=$_POST['searchs'];
		$did=$row["drugID"];
		$mdate=$row["manuDate"];
        $exdate=$row["expireDate"];		
        $uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}
		
	   ?>

	  <tr><td>
	  <?php
	
	  if($quant > 0){
	   $sqq="insert into expired_drugs(manuDate,expireDate,expire_drug_quantity,removed_date,drug_id,removedby_id) values ('$mdate','$exdate','$quant','$date','$did','$userid')";
	   $sqq1="update store set manuDate='null',expireDate='null', quantity=(quantity-quantity)  WHERE ExpireDate < '$cd' ";
	   $sq3=mysql_query($sqq,$con);
	   $sq4=mysql_query($sqq1,$con);
	   if($sq3 and $sq4)
	   {
	   echo"Sucessful";
	   }
	   else
	   {
	   echo"Unsucessful";
	   }
	   }
	   
	  ?>
	  
	</td>
	   </tr>
	   <?php

	   }
	   }
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
