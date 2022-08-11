<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var MeterID = document.getElementById('MeterID');
 var CustomerFirstName = document.getElementById('Customer FirstName'); 
  var Customerlastname = document.getElementById('CustomerLastName');
  var Date = document.getElementById('Date');
  var Month = document.getElementById('Month');
  var Year = document.getElementById('Year');
   var select3 = document.getElementById('select3');
    var housenumber = document.getElementById('housenumber');
	var previous_reading = document.getElementById('previous_reading');
	var present_consumption = document.getElementById('present_reading');
if (isNumeric(meter_id, "Please Enter Valid ID Number!")) 
{
if (isAlphabet(firstname, "Please enter only letters for your first Name!"))
 {
 if (isAlphabet(lastname, "Please enter only letters for your Last Name!"))
 {
if (isAlphabet(Date, "Please enter only letters for your Day!"))
 {
 if (isAlphabet(Month, "Please enter only letters for your Month!"))
 {
 if (isAlphabet(Year, "Please enter only letters for your Year!"))
 {
if (madeSelection(select3, "Please Choose Kebele!")) 
{
if (isNumeric(housenumber, "Please Enter your Valid  House Number!")) 
{ 
if (isNumeric(previous_reading, "Please Enter your Valid  previous_reading!")) 
{ 
if (isNumeric(present_reading, "Please Enter your Valid  present_reading!")) 
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
width:500px;
height:600px;
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
<title>Recordmeterreadingform</title></head>
<body>
<div class="a">
<h2>Record meter value</h2>
<form action="recordmeterreading.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11">
<tr><td>meter id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="meter_id" name="meter_id" placeholder="Enter Your Id Number " /></td></tr>
<tr><td>First    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="firstname" name="firstname" placeholder="Enter First Name" /></td></tr>
<tr><td>Last     Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" /></td></tr>
<tr><td>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="Date" name="Date" placeholder="Enter Date" /></td></tr>
<tr><td>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="Month" name="Month" placeholder="Enter Month" /></td></tr>
<tr><td>Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="firstname" name="Year" placeholder="Enter Year" /></td></tr>
<tr>
      <td>Kebele&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="kebele" id="select3">
            <option>---Select Kebele---</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
          </select>
 <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg1"></span></td>
      </tr>
<tr><td align="center">House Number&nbsp;&nbsp;&nbsp;<input type="text" id="housenumber" name="housenumber" placeholder="Enter House number" /></td></tr>
<tr><td align="center">previous_reading&nbsp;&nbsp;&nbsp;<input type="text" id="previous_reading" name="previous_reading" placeholder="Enter previous_reading" /></td></tr>
<tr><td align="center">present_reading&nbsp;&nbsp;&nbsp;<input type="text" id="present_reading" name="present_reading" placeholder="Enter present_reading" /></td></tr>
<tr><td></td></tr>
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="Submit" value="submit" />&nbsp;&nbsp;
        <input type="reset" name="Cancel" value="Cancel" /></td></tr>
</table>

</form>
</div>
</body>
</html>

