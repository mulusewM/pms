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
if(isset($_POST['ID'])){
include('connection.php');
 mysql_query("insert into manorder values ('".$_POST['ID']."','".$_POST['DrugName']."','".$_POST['DrugType']."','".$_POST['quantity']."','".$_POST['OrderDate']."','".$_POST['orderer_id']."')");
echo " <script>alert('order send  successfuly!');
	 </script>".mysql_error();
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
		 <li><p style="margin-left:260px;font: bold 20px times new roman;">Well Come To Manager Page<p></li>
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
<div id="slides">

<div id="content1">
<td valign="top">
<br>
	
<div class="accdiv">
<table>
     <h4><center><color type='white'><u> Send Ordered Drug information</u></center></h4>
  <form action="sendOedr.php" method="post" name="form" onSubmit="return validate()"target=_self >
<tr>
<td> ID:</td>
<td><input type="text" name="ID" id="ID"required placeholder="Enter Id"/><span id="Iderror" class="error" ></span></td></tr>
<td> DrugName:</td>
<td><input type="text" name="DrugName" id="DrugName"required placeholder="Enter DrugName"/><span id="DrugNameerror" class="error" ></span></td></tr>
<td>DrugType:</td>
<td><input type="text" name="DrugType" id="DrugType"required placeholder="Enter DrugType"/><span id="DrugTypeerror" class="error" ></span></td></tr>
<td> quantity:</td>
<td><input type="text" name="quantity" id="quantity"required placeholder="Enter quantity"/><span id="quantityerror" class="error" ></span></td></tr>
<td> <class='para1_text'>Ordered date:</td><td><input type="date" name="OrderDate"value="<?php $date=date("Y-m-d");echo $date;?>"  ></td><tr>
<td> orderer_id:</td>
<td><input type="text" name="orderer_id" id="orderer_id"required placeholder="Enter orderer_id"/><span id="orderer_iderror" class="error" ></span></td></tr>
<tr>
<td ><input name="submit"  type="submit" value="send" /></td><td>
<input type="reset" value="Clear" class="button" /></td>
</tr>
</form>
  </table>
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