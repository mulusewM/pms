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
$message="";
$messag="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['update']))
{
$drugID= $_POST ['id'];  
$DrugName  = $_POST['dname'];
$DrugType = $_POST['dtype'];
$ManuDate = $_POST['manu'];                   
$ExpireDate= $_POST['expire'];
$Quantity= $_POST['quantity'];
$UnitCost= $_POST['unitcost'];
$SellingPrice=$_POST['sell'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinall",$con);
$con=mysql_connect("localhost","root","")or die ("unable to connect".mysql_error());
mysql_select_db("pharmacyfinall",$con);
$sql="update store set drugID = '$drugID', drugName= '$DrugName',DrugType = '$DrugType',ManuDate = '$ManuDate', ExpireDate = '$ExpireDate',
Quantity='$Quantity',UnitCost = '$UnitCost' ,SellingPrice = '$SellingPrice' WHERE  drugID = '$drugID'";

$res=mysql_query($sql) or die("query error".mysql_error());
$congra="You are update successfully";
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
		
		  <li><a href="logout.php" id="log" style="margin-left:750px;">logout</a></li>
		 	
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
<br>


<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinall",$con);
$sql="select drugID from store";
$res=mysql_query($sql) or die("query error".mysql_error());
?>
<center><table border="1" width="400">	

<h3><b><span style="color:blue">Select Drugs ID</span></b></h3>
<form action="" method="post">

<tr><td><select name="select">
<?php
while($row=mysql_fetch_array($res)){
echo "<option value=".$row['drugID'].">".$row['drugID']."</option>";
}
?>
</select>
<input type="submit" name="submit" Value="Continue"></td> 
</tr>

</form></table>
  
			
	
	</center> 

	
	
	
<?php
if(isset($_POST['submit'])){
$drugID=$_POST['select'];
$trip=trim($drugID);
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinall",$con);
$sql="select * from store where drugID='$drugID'";
$result=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($result)){

?>




<div class="accdiv">
<form action="" method="POST">
<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>update drug information</center></font></strong>
 </div>
   <table width="295" valign="" align="center" border="0">

	<br>
<span style="color:blue"><tr><td width="210" class='para1_text'>Drug ID:
<td width="154"><input type="text" name="id" value="<?php echo $row['drugID'];  ?>" /></td></tr>
<tr><td class='para1_text'>Drug Name :<td><input type="text" name="dname" value=" <?php echo $row['drugName'];  ?>" /></td></td></tr>
<tr><td class='para1_text'>Drug Type:<td><input type="text" name="dtype" value="<?php echo $row['drugType'];  ?>" /></td></tr>
<tr><td class='para1_text'>Manu. Date:<td><input type="date" name="manu" value="<?php echo $row['manuDate'];  ?>" /></td></tr>
<tr><td class='para1_text'>Expire Date:<td><input type="date" name="expire" value="<?php echo $row['expireDate'];  ?>" /></td></tr>
<tr><td class='para1_text'>Quantity  :<td><input type="text" name="quantity" value="<?php echo $row['quantity'];  ?>" /></td></tr>
<tr><td class='para1_text'>Unit Cost :<td><input type="text" name="unitcost" value="<?php echo $row['unitCost'];  ?>" /></td></tr>
<tr><td class='para1_text'>Selling Price:<td><input type="text" name="sell" value="<?php echo $row['sellingPrice'];  ?>" /></td></tr>
<tr><td colspan="2"><center><input type="submit" name="update"  value="Save"class="button"></center><br></td></tr>
</form>

</div>
   
</table></center>

<?php
}
}
?>	




	

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
