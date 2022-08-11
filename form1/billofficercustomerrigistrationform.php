<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var customerid = document.getElementById('customerid');
 var firstname = document.getElementById('firstname'); 
  var lastname = document.getElementById('lastname');
   var select3 = document.getElementById('select3');
    var housenumber = document.getElementById('housenumber');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	 var pinnumber= document.getElementById('pinnumber');
if (isNumeric(customerid, "Please Insert Valid ID Number!")) 
{
 if (isAlphabet(firstname, "Please Insert only letters for your first Name!"))
 {
  if (isAlphabet(lastname, "Please Insert only letters for your Last Name!"))
 {
if (madeSelection(select3, "Please Choose Kebele!")) 
{
if (isNumeric(housenumber, "Please Insert Valid  House Number!")) 
{
if (lengthRestriction(username, 3, 15)) 
{  
if (lengthRestriction2(password, 4, 15)) 
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
background_size:cover;
}
.a{
width:350px;
height:650px;
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
<title>Customerapplyregistrationform</title></head>
<body>
<div class="a">
<h2>Customer  Apply Registration </h2>
<form action="billofficerregistration.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11">
<tr><td>Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="customerid" name="customerid" placeholder="Enter Your Id Number " /></td></tr>
<tr><td>First    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="firstname" name="firstname" placeholder="Enter First Name" /></td></tr>
<tr><td>Last     Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" /></td></tr>
<tr>
        <td>Kebele&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="kebele" id="select3">
            <option>---Select Kebele---</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
          </select>
 <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg1"></span></td>
      </tr>
<tr><td>House Number&nbsp;&nbsp;<input type="text" id="housenumber" name="housenumber" placeholder="Enter House number" /></td></tr>
<tr><td>User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="username" name="username" placeholder="Enter User name" /></td></tr>
<tr><td>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="password" name="password" placeholder="Enter Password" /></td></tr>
<tr><td>Pin Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="pinnumber" name="pinnumber" placeholder="Enter Security Code" /></td></tr>
<tr><td>meterid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="meterid" name="meterid" placeholder="Enter custemer meterid " /></td></tr>
<tr><td>Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="day" name="day" placeholder="Enter aproved  day " /></td></tr>
<tr><td>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="Month" name="Month" placeholder="Enter month " /></td></tr>
<tr><td>Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="Year" name="Year" placeholder="Enter Year " /></td></tr>
<tr><td>metersize&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="metersize" name="metersize" placeholder="Enter metersize " /></td></tr>
<tr><td></td></tr>
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="Submit" value="submit" />&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Cancel" value="Cancel" /></td></tr>
</table>

</form>
</div>
</body>
</html>