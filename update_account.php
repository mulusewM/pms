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
$userID= $_POST ['id'];  
$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Sex = $_POST['sex'];                   
$PhoneNumber= $_POST['phone'];
$username= $_POST['user'];
$password= $_POST['pass'];
$Role=$_POST['role'];


$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinal",$con);
$con=mysql_connect("localhost","root","")or die ("unable to connect".mysql_error());
mysql_select_db("pharmacyfinal",$con);
$sql="update user,user_account set user_id = '$userID', Fname= '$FirstName',Lname = '$LastName',sex = '$Sex', phoneNumber = '$PhoneNumber',
userName='$username',password = '$password' ,role = '$Role',user_id = '$userID' WHERE  user.user_id=$userID and user_account.userr_id=$userID";
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
        <?php 
		include("menu.php");
		?>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<?php 
		include("Admin_menu.php");
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
mysql_select_db("pharmacyfinal",$con);
$sql="select user_id from user,user_account where user.user_id=user_account.userr_id ";
$res=mysql_query($sql) or die("query error".mysql_error());
?>
<center><table border="1" width="400">	

<h3><b><span style="color:blue">Select User ID</span></b></h3>
<form action="" method="post">

<tr><td><select name="select">
<?php
while($row=mysql_fetch_array($res)){
echo "<option value=".$row['user_id'].">".$row['user_id']."</option>";
}
?>
</select>
<input type="submit" name="submit" Value="Continue"></td> 
</tr>

</form></table>
  
			
	
	</center> 

	
	
	
<?php

if(isset($_POST['submit'])){
$userID=$_POST['select'];
$trip=trim($userID);
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinal",$con);
$sql="select * from user,user_account where user.user_id=$userID and user_account.userr_id=$userID" ;
$result=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($result)){

?>




<div class="accdiv">
<form action="" method="POST">
<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Update User's Account</center></font></strong>
 </div>
   <table width="295" valign="" align="center" border="0">

	<br>
<span style="color:blue"><tr><td width="210">User ID:
<td width="154"><input type="text" name="id" value="<?php echo $row['user_id'];  ?>" /></td></tr>
<tr><td>First Name :<td><input type="text" name="fname" value="<?php echo $row['Fname'];  ?>" /></td></td></tr>
<tr><td>Last Name:<td><input type="text" name="lname" value="<?php echo $row['Lname'];  ?>" /></td></tr>
<tr><td>Sex:<td><input type="text" name="sex" value="<?php echo $row['sex'];  ?>" /></td></tr>
<tr><td>phone number:<td><input type="text" name="phone" value="<?php echo $row['phoneNumber'];  ?>" /></td></tr>
<tr><td>user name  :<td><input type="text" name="user" value="<?php echo $row['userName'];  ?>" /></td></tr>
<tr><td>password. :<td><input type="text" name="pass" value="<?php echo $row['password'];  ?>" /></td></tr>
<tr><td>Role. :<td><input type="text" name="role" value="<?php echo $row['role'];  ?>" /></td></tr>
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

</table>

<!--Footer-->

<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                        
</body>
</html>
