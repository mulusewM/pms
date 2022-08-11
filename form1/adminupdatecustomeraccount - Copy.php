<?php session_start(); ?>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var First_Name = document.getElementById('First_Name'); 
 var Last_Name = document.getElementById('Last_Name'); 
 var Kebele = document.getElementById('Kebele'); // Check each input in the order that it appears in the form!
 var user_name = document.getElementById('user_name'); 
 var password = document.getElementById('password'); 
 if (isAlphabet(First_name, "Please Enter Only Letters For First Name!"))
    { 
  if (isAlphabet(Last_name, "Please Enter Only Letters For Last Name!"))
   {
 if (emailValidator(Kebele, "Please Enter  Valid Email  Address!")) 
   {
  if (lengthRestriction(user_name, 4, 30)) 
    { 
  if (lengthRestrictionforpassword(password, 4, 15)) 
    { 
 return true;
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
 </script>
<?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM customer WHERE id  = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;     
				$customer_id= $test['customer_id'] ;               				
				$First_Name= $test['First_Name'] ;					
				$Last_Name=$test['Last_Name'];
				$Kebele=$test['Kebele'];
				$house_number=$test['house_number'];
				$user_name=$test['user_name'] ;
				$password=$test['password'] ;
				$pinnumber= $test['pinnumber'] ;
				
				
				

?>
<p><h3>Update Customer Account Form!!</h3></p>
  <form action="adminupdatecustomer_account.php"  onsubmit='return formValidator()' method="post">
<table width="500" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
	
   <tr><td width="150">Customer ID:</td>
      <td><input type="text" name="employeeid" id="employeeid" value="<?php echo $customer_id; ?>"/></td></tr>
  
  <tr><td width="150">First Name:</td>
      <td><input type="text" name="first_name" id="First_Name" value="<?php echo $First_Name; ?>"/></td></tr>
   
   <tr><td>Last Name:</td>
    <td><input type="text" name="Last_Name" id="Last_Name" value="<?php echo $Last_Name; ?>" /></td></tr>
	
	<tr><td>kebele:</td>
    <td><input type="text" name="email" id="Kebele" value="<?php echo $Kebele; ?>"/></td></tr>
	
	<tr><td>house_number:</td>
    <td><input type="text" name="house_number" id="house_number" value="<?php echo $house_number; ?>"/></td></tr>
	
	<tr><td>User Name:</td>
    <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>"/></td></tr>
	
	<tr><td>password:</td>
    <td><input type="text" name="password" id="password" value="<?php echo $password; ?>"/></td></tr>
	
	<tr><td>Security Code:</td>
    <td><input type="text" name="pinnumber" id="pinnumber" value="<?php echo $pinnumber; ?>"/></td></tr>
	
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>