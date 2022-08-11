<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var id = document.getElementById('id');
   var firstname = document.getElementById('firstname'); 
  var lastname = document.getElementById('lastname');
   var select3 = document.getElementById('select3');
    var housenumber = document.getElementById('housenumber');
	var customer_id = document.getElementById('customer_id');
	var meterid = document.getElementById('meterid');
	var Date = document.getElementById('Date');
	var Month = document.getElementById('Month');
	var Year = document.getElementById('Year');
	var previous_Reading = document.getElementById('Previous_Reading');
	var present_Reading = document.getElementById('Present_Reading');
	var price = document.getElementById('price');
if (isNumeric(id, "Please Enter Valid ID Number!")) 
{
if (isAlphabet(firstname, "Please enter only letters for your first Name!"))
 {
 if (isAlphabet(lastname, "Please enter only letters for your Last Name!"))
 {
if (madeSelection(select3, "Please Choose Kebele!")) 
{
if (isNumeric(housenumber, "Please Enter your Valid  House Number!")) 
{ 
if (isNumeric(customer_id, "Please Enter your Valid  customerid!")) 
{ 
if (isNumeric(meterid, "Please Enter your Valid  meterid!")) 
{ 
if (isNumeric(Date, "Please Enter your Valid  Date!")) 
{ 
if (isNumeric(Month, "Please Enter your Valid  Month!")) 
{ 
if (isNumeric(Year, "Please Enter your Valid  Year!")) 
{ 
if (isNumeric(Previous_Reading, "Please Enter your Valid  Previous_Reading!")) 
{ 
if (isNumeric(Present_Reading, "Please Enter your Valid  Present_Reading!")) 
{  
if (isNumeric(price, "Please Enter your Valid  price!")) 
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
</script> 
<style type="text/css">
body{
background-image:url(image/62.jpg);
background_size:cover;
}
.a{
width:600px;
height:700px;
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
<title>billofficer record consumtion</title></head>
<body>
<div class="a">
<h2>billofficer record consumtion</h2>
<form action="billofficerrecordconsumption.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11">
<tr><td>id&nbsp;<input type="text" id="id" name="id" placeholder="Enter Your Id" /></td></tr>
<tr><td>First    Name&nbsp;<input type="text" id="firstname" name="firstname" placeholder="Enter First Name" /></td></tr>
<tr><td>Last     Name&nbsp;<input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" /></td></tr>
<tr>
      <td>Kebele&nbsp;<select name="kebele" id="select3">
            <option>---Select Kebele---</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
			<option>05</option>
			<option>06</option>
          </select>
 <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg1"></span></td>
      </tr>
<tr><td align="center">House Number&nbsp;<input type="text" id="housenumber" name="housenumber" placeholder="Enter House number" /></td></tr>
<tr><td align="center">customer id&nbsp;<input type="text" id="customer_id" name="customer_id" placeholder="Enter customerid" /></td></tr>
<tr><td align="center">meterid&nbsp;<input type="text" id="meterid" name="meterid" placeholder="Enter meterid" /></td></tr>
<tr><td align="center">Date&nbsp;<input type="text" id="Date" name="Date" placeholder="Enter Date" /></td></tr>
<tr><td align="center">Month&nbsp;<input type="text" id="Month" name="Month" placeholder="Enter Month" /></td></tr>
<tr><td align="center">Year&nbsp;<input type="text" id="Year" name="Year" placeholder="Enter Year" /></td></tr>
<tr><td align="center">Previous_Reading&nbsp;<input type="text" id="Previous_Reading" name="Previous_Reading" placeholder="Enter Previous_Reading" /></td></tr>
<tr><td align="center">Present_Reading&nbsp;<input type="text" id="Present_Reading" name="Present_Reading" placeholder="Enter Present_Reading" /></td></tr>
<tr><td align="center">price&nbsp;<input type="text" id="price" name="price" placeholder="Enter price" /></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="Submit" value="submit" />&nbsp;&nbsp;
        <input type="reset" name="Cancel" value="Cancel" /></td></tr>
</table>

</form>
</div>
</body>
</html>
