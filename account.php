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

    $fname = '';
	$ltype = '';
	$phone = '';
	$user= '';
	$errors=array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$phone= $_POST['phone'];
$user= $_POST['user'];
$pass= $_POST['pass'];
$cpass= $_POST['cpass'];
$role=$_POST['role'];
}

if(isset($_POST['insert']))
{

if(!preg_match('/^[a-zA-Z]+$/',$fname) || empty($fname) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $fname) || preg_match( '/[\s]+/',$fname)){
			array_push($errors,"first name must be character!!");
			}
if(!preg_match('/^[a-zA-Z]+$/',$lname) || empty($lname) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $lname) || preg_match( '/[\s]+/',$lname)){
			array_push($errors,"last name must be character!!");
			}
if(!preg_match('/^[a-zA-Z]+$/',$user) || empty($user) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $user) || preg_match( '/[\s]+/',$user)){
			array_push($errors,"user name must be character!!");
			}	
if (!preg_match("/^(00|[+])(251)[0-9]{9}$/",$phone)||empty($phone) ){
			array_push($errors,"Invalid Phone Number!!");
			}
			
if(count($errors)==0){			
$sql = "insert into user( Fname, Lname, sex,PhoneNumber)VALUES
        ('$fname','$lname','$sex','$phone')";
	$sqq1=mysql_query($sql,$con);
	if($sqq1)
	{
	$sq0="select * from user ";
	$sq54=mysql_query($sq0,$con);
    while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}
        			
$sq2 ="insert into user_account(username, password,Role,user_id)VALUES
('$user','$pass','$role','$userid')";
$sqq2=mysql_query($sq2,$con);		
if($sqq1 and $sqq2){
		$message=' Account created successfully';
		}
		else
		{
		$message="Account can not created ";
		}
		}
		}	
        }
		mysql_close($con);
		 
?>
<html>
<head>
<title> pharmacy</title>
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
	   
         <u id="unique">
		 
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
<td width="25%" valign="top" id="insides">

<?php 
		include("Admin_menu.php");
		?>



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
	
<div class="accdiv">
  <form method="POST" action="" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
<strong><font color="white" size="4px"font-family="times new romman"; ><center>Create New User Account</center></font></strong>
 </div>
  <table width="286" valign="top" align="center" border="0">
 
<tr>
	  <td class='para1_text'><b> First Name:</b></td><td><input type="text" name="fname" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
</tr>
<tr>
     <td class='para1_text' width="220px"> <b>Last Name:</b></td><td>
     <input type="text"   name="lname"   required x-moz-errormessage="Enter last name" ></td>
</tr>
<tr>
	 <td class='para1_text'><b> sex:</b></td><td><input type="radio"name="sex" color="" value="male"><b>Male</b>&nbsp &nbsp&nbsp&nbsp&nbsp
	 <input type="radio"name="sex" value="Female"><b>Female</b></p></td>
</tr>
<tr>

	       <td class='para1_text' width="220px"> <b>Phone Number:</b></td><td>
		   <input type="text"   name="phone"   required x-moz-errormessage="Enter phone number" ></td>
		 
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"> <b>User Name:</b></td><td>
		   <input type="text"   name="user"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><b> Password:</b></td><td><input type="password" name="pass" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"> <b>Confirm Password:</b></td><td>
		   <input type="password"   name="cpass"   required x-moz-errormessage="Enter password" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><b> Role:</b></td><td>
		   <select type = "text" name="role">
		   <option>select role type</option>
		   <option>manage</option>
		   <option>storecordinator</option>
		   <option>Cashier</option>
		   <option>Admin</option>
		    <option>pharmacist</option>
			 <option>supplier</option>
			 
		   </select>
		 
		   </td>
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

