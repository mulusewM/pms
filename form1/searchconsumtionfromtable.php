<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Certificate</title>
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
</style>
	<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var yourid = document.getElementById('yourid');
 if (isNumeric( yourid, "Please Enter Valid  Your Id Number!")) 
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
<form action="searchconsumtion.php" onsubmit='return formValidator()' method="POST">
<center><h3>Search Technician Feadback From Table!</h3></center>
<center><table class="a">
<tr>
	<td>Search</td>
	<td><input type="text" name="name" customer_id="yourid" placeholder="Enter Your Id" size="20"></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>
</body>
</html>
