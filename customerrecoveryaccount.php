 <head>
 <script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var user_name = document.getElementById('user_name'); 
 var password = document.getElementById('password'); 
 var pinnumber= document.getElementById('pinnumber');
  if (lengthRestriction(user_name, 4, 30)) 
    { 
  if (lengthRestrictionforpassword(password, 4, 15)) 
    { 
   if (isNumeric(pinnumber, "Please Enter Only Number for Pin Number!"))
    {
 return true;
	 }
	 }
	 }
return false; 
}
function notEmpty(elem, helperMsg) 
{ 
if (elem.value.length == 0) 
{ 
alert(helperMsg);
 elem.focus(); // set the focus to this input
 return false; 
} 
return true; 
} 
function lengthRestriction(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please Enter Between " + min + " upto " + max + " Characters for Username!");
 elem.focus(); return false; 
} 
}  
function lengthRestrictionforpassword(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please Enter Between " + min + " upto " + max + " Characters for Strong password!");
 elem.focus(); return false; 
} 
} 
function isNumeric(elem, helperMsg) 
{ 
var numericExpression = /^[0-9]+$/; 
if (elem.value.match(numericExpression)) 
{ 
return true;
 } 
else 
{ alert(helperMsg); 
elem.focus();
 return false;
 } 
}
 </script>
  <style type="text/css">
body{
background-image:url(image/62.jpg);
background_size:cover;
}
.a{
width:350px;
height:250px;
background-color:#CCCCCC;
margin:0 auto;
margin-top:40px;
padding-top: 10px;
padding-left: 50px;
-webkit-border-radius: 15px;
color:#003399;
}
.a input[type="text"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
#select3{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius10px;
-webkit-border-radius:5px;
}
.a input[type="password"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="reset"]{
width:65px;
height:25px;
border:1;
border-bottom-style:solid;
border-color:#00CC33;
border-radius:5px;
-webkit-border-radius:5px;
background-color:#99FF00;
}
.a input[type="Submit"]{
width:65px;
height:25px;
border:1;
border-radius:5px;
border-bottom-style:solid;
border-color:#00CC33;
-webkit-border-radius:5px;
background-color:#99FF00;
}
</style>
 </head>
<?php
include 'form1/db1.php';

if(isset($_POST['Submit']))
{
$customer_id=$_POST["customer_id"];
$pinnumber=$_POST["pinnumber"];

$result = mysql_query("SELECT * FROM   customer where customer_id='$customer_id' and pinnumber='$pinnumber'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count > 0) 
   {
   while($row = mysql_fetch_array($result))
  {
  $id=$row['id'];  				
  $user_name=$row['user_name'];     			
  $password=$row['password'];                    
  $pinnumber=$row['pinnumber'];
  }
}
   else{
		echo '<script>alert("Please Insert Correct Information!")</script>';
		echo '<script>windows: location="customerrecoveryform.php"</script>';
	     }
		 }
?>
<br /><br /><br />
<body><div class="a">
<p><h4>Reset Your Account By Inserting The Following Information!</h4></p>
  <form method="post" action="customerrecovery.php" onSubmit="return formValidator()" method="post">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
	
   
	<tr><td>User Name:</td>
    <td><input type="text" name="user_name" Required="Required" id="user_name" value="<?php echo $user_name; ?>"/></td></tr>
	
	<tr><td>Password:</td>
    <td><input type="text" name="password" Required="Required" id="password" value="<?php echo $password; ?>"/></td></tr>
	
	<tr><td>Security Code:</td>
    <td><input type="text" name="pinnumber" Required="Required" id="pinnumber" value="<?php echo $pinnumber; ?>"/></td></tr>
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table></form></div></body>