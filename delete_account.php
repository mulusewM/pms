<?php
		
		include("headerr.php");
	
?>
 <?php
include('connection.php');
$message="";
$messag="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['delete']))
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
$sql="delete from user_account WHERE  userID = '$userID'";
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

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<img style=" margin-bottom:0px;margin-top:23px;border-radius:0px;" src="img/km.png" align="center" width="700px" ></p>
</td>
</tr>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul >
         <li><a href="home.php">Home</a></li>
         <li><a href="about.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="developer.php">Gallary</a></li>
		 <li><a href="viewdorm.php">Basic information</a></li>
		 <li><a href="help.php">Help</a></li>
		 <li><a href="login.php" id="log">Login</a></li>
         </ul>
		
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table >

<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="4">PHARMACY</font></th>
</tr>


<tr>
<td ><img src="slideshow/images/12.jpg" style="height:320px;"  valign="top"></td>
</tr>

</table>
<table border="0">
<tr>
<th width="250px" bgcolor="#336699" height="25px"><font face="times new Roman" color="white" size="5"><center>Find Us</center></font></th>				
</tr>
<tr><td>
                     <a href="http://www.facebook.com"> <img src="images/facebook.jpg" width="70px" height="70px" style="margin-top:30px;"></a>&nbsp
					
					<a href="http://www.gmail.com"> <img src="images/email.png" width="40px" height="30px"style="margin-top:30px;"</a>&nbsp &nbsp &nbsp
					
					<a href="http://www.yahoo.com"> <img src="images/yahoo.png" width="40px" height="30px"style="margin-top:30px;"</a>
				
</td></tr>
</table>



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
$sql="select userID from user_account";
$res=mysql_query($sql) or die("query error".mysql_error());
?>
<center><table border="1" width="400">	

<h3><b><span style="color:blue">Select Employee ID</span></b></h3>
<form action="" method="post">

<tr><td><select name="select">
<?php
while($row=mysql_fetch_array($res)){
echo "<option value=".$row['userID'].">".$row['userID']."</option>";
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
$sql="select * from user_account where userID='$userID'";
$result=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($result)){

?>




<div class="accdiv">
<form action="" method="POST">
<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>	Delete User's Account</center></font></strong>
 </div>
   <table width="295" valign="" align="center" border="0">

	
<span style="color:blue"><tr><td width="210">User ID:
<td width="154"><input type="text" name="id" value="<?php echo $row['userID'];  ?>" /></td></tr>
<tr><td>First Name :<td><input type="text" name="fname" value="<?php echo $row['FirstName'];  ?>" /></td></td></tr>
<tr><td>Last Name:<td><input type="text" name="lname" value="<?php echo $row['LastName'];  ?>" /></td></tr>
<tr><td>Sex:<td><input type="text" name="sex" value="<?php echo $row['Sex'];  ?>" /></td></tr>
<tr><td>phone number:<td><input type="text" name="phone" value="<?php echo $row['PhoneNumber'];  ?>" /></td></tr>
<tr><td>user name  :<td><input type="text" name="user" value="<?php echo $row['username'];  ?>" /></td></tr>
<tr><td>password. :<td><input type="text" name="pass" value="<?php echo $row['password'];  ?>" /></td></tr>
<tr><td>Role. :<td><input type="text" name="role" value="<?php echo $row['Role'];  ?>" /></td></tr>
<tr><td colspan="2"><center><input type="submit" name="delete"  value="Delete"class="button">&nbsp&nbsp&nbsp
 <input type="Reset"value="Cancel" class="button"/></center><br></td></tr>
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
