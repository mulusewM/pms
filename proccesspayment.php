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
if(isset($_POST['invoice_no'])){
include('connection.php');
 mysql_query("insert into payment values ('".$_POST['drugname']."','".$_POST['invoice_no']."','".$_POST['payamount']."','".$_POST['paytype']."','".$_POST['serial_no']."')");
echo " <script>alert(' successfuly paid!');
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
		
		  <li><a href="logout.php" id="log" style="margin-left:750px;">Logout</a></li>
		 	
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
<h3><center><color type='white'><u> processpayment</u></center></h3>
  <form action="proccesspayment.php" method="post" name="form" onSubmit="return validate()"target=_self >
<tr>
<td> drugname:</td>
<td><input type="text" name="drugname" id="drugname"required /><span id="drugnameerror" class="error" ></span></td></tr>
<td> invoice_no:</td>
<td><input type="text" name="invoice_no" id="invoice_no"required /><span id="invoice_noerror" class="error" ></span></td></tr>
<td> payamount:</td>
<td><input type="text" name="payamount" id="payamount"required /><span id="payamounterror" class="error" ></span></td></tr>
<td>paytype:</td>
<td><input type="text" name="paytype" id="paytype"required /><span id="paytypeerror" class="error" ></span></td></tr>
<td> serial_no:</td>
<td><input type="text" name="serial_no" id="serial_no"required /><span id="serial_noerror" class="error" ></span></td></tr>

<tr>
<td ><input name="submit"  type="submit" value="pay" /></td><td>
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