<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Payment</title>
<style type="text/css">
.a{
width:90x;
height:60px;
background-color:#FFFFFF;
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
.a input[type="submit"]{
width:65px;
height:25px;
border:1;
border-bottom-style:solid;
border-color:#00CC33;
border-radius:5px;
-webkit-border-radius:5px;
background-color:#99FF00;
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
</style>
	<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var meterid = document.getElementById('meterid');
 if (isNumeric( meterid, "Please Enter Valid  Meter Id!")) 
{
 return true;
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
</head>

<body>
<form action="billofficerSearchPayment.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search Customer Payement Information!</h3></center>
<center><table class="a">
<tr>
	<td>Search</td>
	<tr>
<td>
		  <select name="select1" id="select1">
             <option>Month</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
			<option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option> 
			<option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option> 
            </select>&nbsp;&nbsp;
		  <select name="select2" id="select2">
            <option>Year</option>
			<option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option> 
			<option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option> 
			<option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option> 
			<option>2021</option>
            <option>2022</option>
            <option>2023</option> 
			<option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option> 
			<option>2028</option>
            <option>2029</option>
            <option>2030</option>
            <option>2031</option> 
			<option>2032</option>
            <option>2033</option>
            <option>2034</option> 
			<option>2035</option>
            <option>2036</option>
            <option>2037</option>
            <option>2038</option> 
			<option>2039</option>
            <option>2040</option>
            <option>2041</option>
            <option>2042</option> 
          </select></td></tr>
		  <tr><td height="20"></td></tr>
		  <tr>
	<td><input type="submit" name="submit" value="Search">&nbsp;<input type="reset" value="Clear" /></td>
	</tr>
</tr>
</table></center>
</form>
</body>
</html>
