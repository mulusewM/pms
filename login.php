<?php 
include "connection.php";
session_start();?>

<?php
		
		include("headerr.php");
	
?>
<script type="text/javascript"> <!--------------------------TO PREVENT BACK AFTER SIGN OUT PROCESS-----------------------
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
 </script>

<?php
	$error = "";
   $con =mysql_connect("localhost","root","");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST['login']))
{
		$myusername = $_POST['user'];
		$mypassword = $_POST['pass'];
		
	if (empty($myusername) || !preg_match('/^[a-zA-Z]+$/',$myusername) || preg_match( '/[\s]+/',$myusername))
	
		 $error = "please enter user name and password !!";
		 
	else if(empty($myusername))
		 $error = "Invalid  Password Input !!";
	else{
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("pharmacyfinall",$con);
$con=mysql_connect("localhost","root","")or die ("unable to connect".mysql_error());
mysql_select_db("pharmacyfinall",$con);
		$sql = "SELECT * FROM user_account WHERE username = '$myusername' and password ='$mypassword'";
		$result = mysql_query($sql,$con);
		$row = mysql_fetch_array($result);
		if(isset($_POST['register']))
			if(isset($_POST['active'])){
		$active = $row['active'];
			}
		$count = mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1) {
       session_register("myusername");
		//$_SESSION[bug_compat_42("myusername")));
        $_SESSION['login_user'] = $myusername;
		$role=$row['role'];
		$stat=$row['status'];
		if($stat==0){
		if($role=="Admin")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:manage_account.php");
		}
		else if($role=="pharmacist")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:pharmacist.php");
		}
		 else if($role=="storecordinator")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:drugs.php");
		 }
		
		else if($role=="manage")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:manage.php");
		}
		else if($role=="supplier")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:supplier.php");
		}
		else if($role=="Cashier")
		{
		$_SESSION['user_id']=$row['user_id'];
        header("location:item_detail.php");
		}
		}
	  else{
         echo "Your Login Name or Password is NOT EXIST IN THE DATATBASE";
		 }
		} }}}
   
	?>
	

<html>
<head>

<title> PHARMACY MANAGEMENT SYSTEM</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script>
				number = 1;
				function animate(){
				document.image_rotate.src = number+".jpg";
				number++;
				if (number > 3)   
				number = 1;  
				}
				setInterval(animate, 2500);
			</script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:10px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:150px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;"> PHARMACY MANAGEMENT SYSTEM</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
        <ul>
         <li><a href="home.php">Logout</a></li>
         <li><a href="help1.php">Help</a></li>
         <li><a href="contactus.php">Basicinfo</a></li>
		  <li><a href="developer.php">Developer</a></li>
		 <li><a href="contactus1.php">Contactus</a></li>
		 <li><a href="aboutus.php">AboutUs</a></li>
		 <li><a href="home.php" id="log">Home</a></li>
         </ul>
		
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="800px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table>

<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="4">PHARMACY</font></th>
</tr>


<tr>
<td > <img src="slideshow/images/2.png" style="height:300px;"  valign="top"></td>
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
				    <!--<a href="http://www.youtube.com"> <img src="images/youtube.png" width="40px" height="30px"style="margin-top:30px;"</a>-->
</td></tr>
</table>



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
	
<div class= "logdiv">

           <form method="POST" action="">
<div style="background-color:#336699;border-radius:20px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:15px; height:30px;"> 
              <strong><font color="white" size="2px">User Login</font></strong>
 </div>
 
 <p align="center"><img src="img/login_icon1.gif" title="Member Login" width="100"></p>
  
  <table width="200" valign="top" align="center" border="0">
  
  <tr>
	<!--<td class='para1_text' width="20px" ><b>Username:</b></td>-->
	 <b>User name:</b><input type="text"   name="user" value=""required AutoComplete="off">	 
 </tr>
 <br>
 <tr>
	  <!--<td class='para1_text'><font color="red"></font><b> Password:</b>-->
	  <b>password:</b><input type="password" name="pass" value=""required>
	  </tr>
		<tr><br> 
		
				               
				</tr>
				
		 </div>
  
  <br>
  <tr>
	<br>
	
    <td><center><input type="submit" name="login" class="button_example" value="login" >
	<input type="reset"  class="button_example" value="Clear" /></center></td>
  </tr>
  <!--<tr>
    
    <td class='para1_text' width="280px"><a href="forget.php">Forget Your Password? <img src="img/help.png"> </a></td>
  </tr>-->
 
  <?php echo $error ;?>

</table> 
  </form>
<!--Php Script-->  
</div>
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
