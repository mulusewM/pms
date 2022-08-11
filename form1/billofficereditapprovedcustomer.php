<?php session_start(); ?>
     <script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var first_name = document.getElementById('first_name'); 
 var last_name = document.getElementById('last_name'); 
 var customer_id = document.getElementById('customer_id'); // Check each input in the order that it appears in the form!
 var kebele = document.getElementById('kebele'); 
 var house_number = document.getElementById('house_number'); 
 if (isAlphabet(first_name, "Please Enter Only Letters For First Name!"))
    { 
  if (isAlphabet(last_name, "Please Enter Only Letters For Last Name!"))
   {
 if (isNumeric(customer_id, "Please Insert Valid Customer ID!")) 
   {
if (madeSelection(kebele, "Please Choose Kebele!")) 
{ 
 if (isNumeric(house_number, "Please Insert Valid House Number!")) 
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
function madeSelection(elem, helperMsg) 
{ 
if (elem.value == "-Select Kebele-") 
{ 
alert(helperMsg); 
elem.focus();
 return false; 
} 
else 
{ 
return true;
 } 
} 
 </script>
	 <?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM approvedtable WHERE id = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;                    				
				$first_name= $test['first_name'] ;				   						
				$last_name=$test['last_name'];
				$customer_id=$test['customer_id'] ;
				$kebele=$test['kebele'] ;
				$house_number=$test['house_number'] ;
                 ?>

<p><h3>Update Technical Account Form!!</h3></p>
  <form  action="billofficerupdateapprovedcustomer.php" onsubmit='return formValidator()' method="post">
<table width="500" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id"  value="<?php echo $id; ?>" /></td></tr>
  
  <tr><td width="150">Customer First Name:</td>
      <td><input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>"/></td></tr>
   
   <tr><td>Customer Last Name:</td>
    <td><input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" /></td></tr>
	
	<tr><td>Customer ID:</td>
    <td><input type="text" name="customer_id" id="customer_id" value="<?php echo $customer_id; ?>"/></td></tr>
	
	<tr><td>Kebele:</td>
	<td>
	<select name="kebele" id="kebele">
	<option><?php echo $kebele; ?></option>
	<option>-Select Kebele-</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	</select></td></tr>
	<tr><td>House Number:</td>
    <td><input type="text" name="house_number" id="house_number" value="<?php echo $house_number; ?>"/></td></tr>
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>