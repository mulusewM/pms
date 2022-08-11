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
	   
         <ul>
		 <li><p style="margin-left:280px;font: bold 20px times new roman;">Well Come To Manager Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:210px;">logout</a></li>
		 	
         </ul>
		
         </div>
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
<td valign="top">
<br>

<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
				<td>
						<form action="" method='POST'>
						<table>
							<tr>
								<td class="search"></td><tr>
								<td>Current Date</td></tr>
								<td><input type="date" name="searchs" value="<?php $date=date("Y-m-d");echo $date;?>"/></td></tr>
								<tr>
								<td><input type="submit" value="Check" name="search" style="cursor:pointer;" class="button_example"/></td>
								
								
							</tr>
						</table>
					</form>
					</table><br>
<?php
	include('connection.php');				
if ($_SERVER["REQUEST_METHOD"] == "POST") {				


	
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinal",$con);
$con=mysql_connect("localhost","root","")or die ("unable to connect".mysql_error());
mysql_select_db("pharmacyfinal",$con);					   
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
</div>
  

<?php
}
}

}
}
?>
</table></center>

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
