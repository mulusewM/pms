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

?>
<?php
	include('connection.php');

	$sq50="select * from store";
	   
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

 include('connection.php');
    $dd="";
	$mm="";
	$manu = '';
	$expire= '';
	$quantity= '';
	$unitcost= '';
	$sell= '';
	$rd= '';
	$errors=array();
if(isset($_POST['enter']))
{

         
		$dn = $_POST['nam'];  
        $val = $_POST['val'];
        $rdate = $_POST['rdate'];
		$manu = $_POST['mdate'];
	    $expire= $_POST['edate'];
	    $unitcost= $_POST['ucost'];
	    $sell= $_POST['sp'];
	$sq20="select * from store where drugID=$dn";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		$qty=$row['quantity'];
		$exdate=$row['expireDate'];
		$mndate=$row['manuDate'];
		

	}
		
if(!preg_match('/^[0-9]+$/',$val) || empty($val) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $val) || preg_match( '/[\s]+/',$val)){
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
     if($expire > $date){
		if($qty==0){
	   $sqq1="update store set manuDate='$manu',expireDate='$expire',quantity=(quantity+$val),unitCost='$unitcost',
	   SellingPrice='$sell',recordedDate='$rdate',recorder_id='$userid' WHERE drugID = '$dn'";
	   $sq3=mysql_query($sqq1,$con);
	   
	   if($sq3)
	   {
	   echo"Sucessful";
	   }
	   else
	   {
	   echo"Unsucessful";
	   }
	}
else{
       if($expire==$exdate and $manu==$mndate ){
	   if($qty>0){
	   $sqq="update store set quantity=(quantity+$val),unitCost='$unitcost',
	   SellingPrice='$sell',recordedDate='$rdate',recorder_id='$userid' WHERE drugID = '$dn'";
	   $sq3=mysql_query($sqq,$con);
	   if($sq3)
	   {
	   $message="<font color=green>Sucessfuly added</font>";
	   }
	   else
	   {
	   $message="<font color=red>notsucessful</font>";
	   }
	   }
	   }
	   
	    else
	   {
	   $message="<font color=red>The Expired date is different please transfer to stock</font> ";
	   }
	   }	
	
}
else{$dd="<font color=red>"."This drug is Expired please check Expired date";}
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
<?php 
		include("storecoordinator.php");
		?>

</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br><br><br>

<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
		

				<td>
					<form action="" method='POST'>

	<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Add Drugs Information</center></font></strong>
 </div>
   <table width="370" valign="top" align="center" border="0"><tr><td>
  <table width="286" valign="top" align="center" border="0">
  
<tr>
	  <td class='para1_text' width="220px"><b>Drug ID</b></td>
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

<tr>
	 <td class='para1_text'><b> Manu date:</b></td><td><input type="date"name="mdate" required x-moz-errormessage="" >
</tr>
<tr>

	       <td class='para1_text' width="220px"> <b>Expire date:</b></td><td>
		   <input type="date"   name="edate"   required x-moz-errormessage="" ></td>
		 
	     </tr>	 
	<tr>

	       <td class='para1_text' width="220px"> <b>Quantity:</b></td><td>
		   <input type="number"   name="val"    required x-moz-errormessage="Enter quantity"  ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><b> Unit Cost:</b></td><td><input type="text" name="ucost" id="password" required x-moz-errormessage="Enter unit cost" maxlength="15"></td>
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"> <b>Selling Price</b></td><td>
		   <input type="text"   name="sp"   required x-moz-errormessage="Enter selling price" ></td>
		 
	     </tr>
		 <tr>
		 <?php

echo $mm;


?>		
			<td class='para1_text'><b>record date:</b></td><td><input type="date" name="rdate" value="<?php $date=date("Y-m-d");echo $date;?>"  >
		</tr>
		 	 
  <tr>
    <td><div align="right"></div></td>
    
  </tr>
  <tr>
  
    <td>&nbsp&nbsp;</td>
	<br>
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="enter"  class="button_example" value="Add" />&nbsp&nbsp
	<input type="reset" name="submitlogin" class="button_example" value="Clear" /></td>
	
  </tr>
  <tr>
  
  <?php
echo $message;
echo $dd;
echo $mm;
include('errors.php');

?>		
  
  </tr>
  
</table> 		
 			
			
			<?php
			include('connection.php');
           if(isset($_POST['enter'])){
			$n = $_POST['nam'];  
            $val = $_POST['val'];
		    $manu=$_POST['mdate'];
	        $expire=$_POST['edate'];
			$ucost=$_POST['ucost'];
	        $sprice=$_POST['sp'];


	   
	   $q1="select * from store where dn='$n'";
	   $sq2=mysql_query($q1,$con);
	   if($sq2)
		
	   while($row=mysql_fetch_array($sq2)){  
       $exdate=$row["ExpireDate"];
	   $name=$row["dn"];
	   ?>

	  <tr><td>
	  <?php
	   $unitcost=$row['UnitCost'];
	   $qunt=$row['Quantity'];
	   if($qunt==0){
	   $sqq="update store set ManuDate='$manu',ExpireDate='$expire',Quantity=(Quantity+$val),UnitCost='$ucost',SellingPrice='$sprice'where dn='$n'";
	   $sq3=mysql_query($sqq,$con);
	   if($sq3)
	   {
	   $mm="Sucessfulll";
	   }
	   else
	   {
	   echo"Unsucessful";
	   }
	      }
	 else{
	   if($exdate==$expire){
	   $sell=$row['SellingPrice'];
	   $sqq="update store set ManuDate='$manu',ExpireDate='$expire',Quantity=(Quantity+$val),UnitCost='$ucost',
	   SellingPrice='$sprice' where dn='$n'";
	   $sq3=mysql_query($sqq,$con);
	   if($sq3)
	   {
	   $mm="Sucessful";
	   }
	   else
	   {
	   echo"notsucessful";
	   }
	   }
	   
	    else
	   {
	   echo"please transfer to stock ";
	   }
	   }
	  ?>
	  
	</td>
	   </tr>
	   <?php
	   }
	   
	   }
	   ?>
	  </tr></td></table>
					</tr>
					</table></center><br>
					
					</form>
					</table>

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
