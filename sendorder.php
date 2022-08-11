
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
		 <li><p style="margin-left:260px;font: bold 20px times new roman;">Well Come To manager Page<p></li>
		  <li><a href="logout.php" id="log" style="margin-left:160px;">Logout</a></li>
		 	
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
<td valign="top">
<br>
	
<div class="accdiv">


  <form method="POST" action="" >
 <div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Ordered Drugs Information</center></font></strong>
 </div>
  <table width="286" valign="top" align="center" border="0">
  <tr>

	       <td class='para1_text' width="220px"> <b>Id:</b></td><td>
		   <input type="number"   name="id"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
<tr>
	  <td class='para1_text' width="220px"><b>Drug Name</b></td><td><input type="text" name="dname" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
</tr>
<tr>
     <td class='para1_text' width="220px"> <b>Drug Type:</b></td><td>
     <input type="text"   name="dtype"   required x-moz-errormessage="Enter last name" ></td>
</tr>
	 
	<tr>

	       <td class='para1_text' width="220px"> <b>Quantity:</b></td><td>
		   <input type="number"   name="quantity"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 
	<tr>
		<td class='para1_text'><b>order date:</b></td>
		<td><input type="date" name="ordate"value="<?php $date=date("Y-m-d");echo $date;?>"  >
	</tr>
		 	 
  <tr>
    <td><div align="right"></div></td>
    
  </tr>
  <tr>
    <td>&nbsp&nbsp;</td>
	<br>
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="insert" class="button_example" value="Send" />&nbsp&nbsp
	<input type="reset" name="submitlogin" class="button_example" value="Clear" /><br><br></td>
  </tr>
  
</table> 
</form>
<?php
include('connection.php');
$message="";
$messag="";
$ss="";
$dd="";

$errors=array();
$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}
 $date=date("Y-m-d");
if(isset($_POST['insert']))
{
	$id = $_POST['id'];
    $dname = $_POST['dname'];
	$dtype = $_POST['dtype'];
	//$manu = $_POST['manu'];
	//$expire= $_POST['expire'];
	$quantity= $_POST['quantity'];
	//$unitcost= $_POST['unitcost'];
	//$sell= $_POST['sell'];
	$od= $_POST['ordate'];
	{

    
   
   mysql_query("insert into order(ID,DrugName,DrugType,quantity,OrderDate,orderer_id ) values 
	('$id','$dname','$dtype','$quantity','$od','$userid')")or die (mysql_error());
	
	}
mysql_close($con);
								
}		 
?>
	<?php
  echo $message;
echo $messag;
include('errors.php');
echo $ss;
echo $dd;
?>		
  
  
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

