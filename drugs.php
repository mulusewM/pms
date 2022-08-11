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
$message="";
$messag="";
$ss="";
$dd="";
$dname = '';
	$dtype = '';
	$manu = '';
	$expire= '';
	$quantity= '';
	$unitcost= '';
	$sell= '';
	$rd= '';
	$errors=array();
if(isset($_POST['insert']))
{
 
	$dname = $_POST['dname'];
	$dtype = $_POST['dtype'];
	$manu = $_POST['manu'];
	$expire= $_POST['expire'];
	$quantity= $_POST['quantity'];
	$unitcost= $_POST['unitcost'];
	$sell= $_POST['sell'];
	$rd= $_POST['recdate'];

$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}
if(!preg_match('/^[a-zA-Z]+$/',$dname) || empty($dname) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $dname) || preg_match( '/[\s]+/',$dname)){
			array_push($errors,"drug name must be character!!");
			}
if(!preg_match('/^[a-zA-Z]+$/',$dtype) || empty($dtype) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $dtype) || preg_match( '/[\s]+/',$dtype)){
			array_push($errors,"drug type must be character!!");
			}
if(!preg_match('/^[0-9]+$/',$quantity) || empty($quantity) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $quantity) || preg_match( '/[\s]+/',$quantity)){
			array_push($errors,"quantity must be number!!");
			}
if(!preg_match('/^[0-9]+$/',$unitcost) || empty($unitcost) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $unitcost) || preg_match( '/[\s]+/',$unitcost)){
			array_push($errors,"cost must be number!!");
			}
if(!preg_match('/^[0-9]+$/',$sell) || empty($sell) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $sell) || preg_match( '/[\s]+/',$sell)){
			array_push($errors,"price must be number!!");
			}
 $date=date("Y-m-d");
 
    if(count($errors)==0){
	$sqq0="select * from store";
	$sq55=mysql_query($sqq0,$con);
    while($row=mysql_fetch_array($sq55))
		{
		   
			$drugname=$row['drugName'];
		
		}
	if($drugname != $dname)	{
	if($expire > $date){
	$sql = "insert into store(drugName,DrugType,manuDate,expireDate,quantity,unitCost,sellingPrice,recordedDate,recorder_id) values 
	('$dname','$dtype','$manu','$expire','$quantity','$unitcost','$sell','$rd','$userid')";
	$sqq1=mysql_query($sql,$con);
	if($sqq1)
	{
	$sq0="select * from store";
	$sq54=mysql_query($sq0,$con);
    while($row=mysql_fetch_array($sq54))
		{
			$drugid=$row['drugID'];
			
		}
		
	
    $sq2 = "insert into stock(transfer_quantity,manuDate,expireDate,transfered_date,drugID,user_id)VALUES 
	('null','null','null','null','$drugid','$userid')"; 
	$sq22=mysql_query($sq2,$con);
	if( $sq22){
			$message='successfully Recorded';
			}
			else
			{
			$message="not recorded ";
			}	
			
}}
else{$dd="<font color=red>"."This drug is Expired please check Expired date";}
}
else{$ss= "This drug is recorded please add the information only";}
}}
mysql_close($con);
								
		 
?>
<html>
<head>
<title>PHARMACY</title>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
</h ead>
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
		 <li><p style="margin-left:260px;font: bold 17px times new roman;">Well Come To Store Coordinator Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:160px;">Logout</a></li>
		 	
         </ul>
		
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
	
<div class="accdiv">


  <form method="POST" action="" >
 <div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Record Drugs Information</center></font></strong>
 </div>
  <table width="286" valign="top" align="center" border="0">
  
<tr>
	  <td class='para1_text' width="220px"><b>Drug Name</b></td><td><input type="text" name="dname" id="dna" required x-moz-errormessage="Enter drugname" maxlength="15"></td>
</tr>
<tr>
     <td class='para1_text' width="220px"> <b>Drug Type:</b></td><td>
     <input type="text"   name="dtype"   required x-moz-errormessage="Enter drug type" ></td>
</tr>
<tr>
	 <td class='para1_text'><b> Manu date:</b></td><td><input type="date"name="manu" required x-moz-errormessage="Enter manufactured Date">
</tr>
<tr>

	       <td class='para1_text' width="220px"> <b>Expire date:</b></td><td>
		   <input type="date"   name="expire"   required x-moz-errormessage="Enter Expire Date" ></td>
		 
	     </tr>	 
	<tr>

	       <td class='para1_text' width="220px"> <b>Quantity:</b></td><td>
		   <input type="number"   name="quantity"   required x-moz-errormessage="Enter quantity" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><b> Unit Cost:</b></td><td><input type="number" name="unitcost" id="unit" required x-moz-errormessage="Enter unitCost" maxlength="15"></td>
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"> <b>Selling Price</b></td><td>
		   <input type="number"   name="sell"   required x-moz-errormessage="Enter selling price" ></td>
		 
	     </tr>
	<tr>
		<td class='para1_text'><b>Recorded date:</b></td><td><input type="date" name="recdate"value="<?php $date=date("Y-m-d");echo $date;?>"  >
	</tr>
		 	 
  <tr>
    <td><div align="right"></div></td>
    
  </tr>
  <tr>
    <td>&nbsp&nbsp;</td>
	<br>
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="insert" class="button_example" value="Submit" />&nbsp&nbsp
	<input type="reset" name="submitlogin" class="button_example" value="Clear" /><br><br></td>
  </tr>
  
</table> 
	<?php
  echo $message;
echo $messag;
include('errors.php');
echo $ss;
echo $dd;
?>		
  </form>
  
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

