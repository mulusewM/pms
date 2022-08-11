<?php session_start(); ?>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var employeeid = document.getElementById('employeeid');
 var first_name = document.getElementById('first_name'); 
 var last_name = document.getElementById('last_name'); 
 var email = document.getElementById('email'); // Check each input in the order that it appears in the form!
 var user_name = document.getElementById('user_name'); 
 var password = document.getElementById('password'); 
 var pinnumber= document.getElementById('pinnumber');
 if (iswordNumeric(employeeid, "Please Insert Employee ID!")) 
 { 
 if (isAlphabet(first_name, "Please Enter Only Letters For First Name!"))
    { 
  if (isAlphabet(last_name, "Please Enter Only Letters For Last Name!"))
   {
 if (emailValidator(email, "Please Enter  Valid Email  Address!")) 
   {
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
	 }
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
function iswordNumeric(elem, helperMsg) 
{ 
var wordnumericExpression = /^[\Wa-zA-Z0-9]+$/; 
if (elem.value.match(wordnumericExpression)) 
{ 
return true;
 } 
else 
{ alert(helperMsg); 
elem.focus();
 return false;
 } 
}
function isAlphabet(elem, helperMsg)
 { var alphaExp = /^[a-zA-Z]+$/; 
if (elem.value.match(alphaExp))
 { 
return true; 
} 
else 
{ 
alert(helperMsg); 
elem.focus();
 return false; 
}
 } 
 function emailValidator(elem, helperMsg) 
{ 
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
if (elem.value.match(emailExp)) { return true; 
} 
else 
{ 
alert(helperMsg); 
elem.focus(); return false; 
} 
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
<?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM  creataccountformeterreader WHERE id  = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;  
				$employeeid= $test['employeeid'] ;	                  				
				$first_name= $test['first_name'] ;					
				$last_name=$test['last_name'];
				$email=$test['email'] ;
				$user_name=$test['user_name'] ;
				$password=$test['password'] ;
				$pinnumber= $test['pinnumber'] ;	
				
				
				

?>

<p><h3>Update Meter Reader Account Form!!</h3></p>
  <form action="adminupdatemeterreader_account.php" onsubmit='return formValidator()' method="post">
<table width="500" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
	
  <tr><td width="150">Employee ID:</td>
      <td><input type="text" name="employeeid" id="employeeid" value="<?php echo $employeeid; ?>"/></td></tr>
  
  <tr><td width="150">Meter Reader FName:</td>
      <td><input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>"/></td></tr>
   
   <tr><td>Meter Reader LName:</td>
    <td><input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" /></td></tr>
	
	<tr><td>Email:</td>
    <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"/></td></tr>
	
	<tr><td>User Name:</td>
    <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>"/></td></tr>
	
	<tr><td>password:</td>
    <td><input type="text" name="password" id="password" value="<?php echo $password; ?>"/></td></tr>
	
	  <tr><td width="150">Security Code:</td>
      <td><input type="text" name="pinnumber" id="pinnumber" value="<?php echo $pinnumber; ?>"/></td></tr>
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>