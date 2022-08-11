<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var id = document.getElementById('cid');
 var bank_Name = document.getElementById('bank_Branch'); 
  var bank_Branch = document.getElementById('bank_Branch');
    var bank_code = document.getElementById('bank_code');
	var accountnumber = document.getElementById('accountnumber');
	var account_password = document.getElementById('account_password');
	 var balance= document.getElementById('balance');
	 var first_name= document.getElementById('first_name');
	 var last_name= document.getElementById('last_name');
	 var customer_id= document.getElementById('customer_id');
if (isNumeric(id, "Please Insert Valid ID Number!")) 
{
 if (isAlphabet(bank_Branch, "Please Insert only letters for your bank_Branch!"))
 {
  if (isNumeric(bank_code, "Please Insert only letters for your bank_code!"))
 {

if (isNumeric(accountnumber, "Please Insert Valid  accountnumber!")) 
{
if (lengthRestriction(accountnumber, 10, 20)) 
{  
if (lengthRestriction2(password, 4, 15)) 
{ 
if (isNumeric(balance, "Please Enter Only Number for balance!"))
 { 
if (isAlphabet(first_name, "Please Enter text for first_name!"))
 { 
if (isAlphabet(last_name, "Please Enter text for last_name!"))
 { 
if (isNumeric(customer_id, "Please Enter Only Number for customer_id!"))
 { 
return true;
     }
	 } 
	 }
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
if (elem.value == "---Select Kebele---") 
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
function lengthRestriction(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please insert between " + min + " and " + max + "Character For User Name!");
 elem.focus(); return false; 
} 
}
function lengthRestriction2(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please Insert between " + min + " and " + max + "for password!");
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
height:480px;
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
<title>customer bankaccount</title></head>
<body>
<div class="a">
<h2>bank account creation </h2>
<form action="Customerbankaccount.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11">
<tr><td>id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="id" name="id" placeholder="Enter Your Id Number " /></td></tr>
<tr><td>bank_Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="bank_Name" name="bank_Name" required="required" placeholder="Enter bank_Name" /></td></tr>
<tr><td>bank_branch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="bank_Branch" name="bank_Branch" required="required" placeholder="Enter bank_branch" /></td></tr>
<tr><td>bankcode &nbsp;&nbsp;<input type="text" id="BankCode" name="BankCode" placeholder="Enter BankCode" /></td></tr>
<tr><td>accountnumber &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="accountnumber" name="accountnumber" required="required" placeholder="Enter accountnumber" /></td></tr>
<tr><td>account_password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="account_password" name="account_password" required="required" placeholder="Enter Password" /></td></tr>
<tr><td>balance &nbsp;&nbsp;<input type="text" id="balance" name="balance" placeholder="Enter balance" /></td></tr>
<tr><td>first_name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="first_name" name="first_name" required="required" placeholder="Enter first_name" /></td></tr>
<tr><td>last_name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="last_name" name="last_name" required="required" placeholder="Enter last_name" /></td></tr>
<tr><td>customer_id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="customer_id" name="customer_id" required="required" placeholder="Enter customer_id" /></td></tr>
<tr><td></td></tr>
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="Submit" value="submit" />&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Cancel" value="Cancel" /></td></tr>
</table>

</form>
</div>
</body>
</html>



 


