<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var firstname = document.getElementById('firstname'); 
 var middlename= document.getElementById('middlename');
 var lastname= document.getElementById('lastname');
 var studentid= document.getElementById('studentid');
 if (isAlphabet(firstname, "Please enter only letters for your First Name"))
 {
 if (isAlphabet(middlename, "Please enter only letters for your Middlename"))
{  
 if (isAlphabet(lastname, "Please enter only letters for your lastname"))
{
if (isNumeric(studentid, "Please enter a valid Student Id")) 
{ 
return true;
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
</script> 
<style type="text/css">
body{
background-color:#CCCCCC;
background_size:cover;
}
.a{
width:900px;
height:550px;
background-color:#00FF00;
margin:0 auto;
margin-top:40px;
padding-top: 10px;
padding-left: 50px;
-webkit-border-radius: 15px;
color:#FFFFFF;
}
.a input[type="text"]{
width:220px;
height:40px;
border:20;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="file"]{
width:200px;
height:30px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="button"]{
width:100px;
height:45px;
border:0;
border-radius:5px;
border-bottom-style:groove;
-webkit-border-radius:5px;
background-color:#00FF00;
}
.a input[type="Submit"]{
width:100px;
height:45px;
border:0;
border-radius:5px;
border-bottom-style:groove;
-webkit-border-radius:5px;
background-color:#00FF00;
}
</style>
</head>
<body>
<div class="a">
<h2 align="center"><font color="#000033">Registrar Upload Certificate</font> </h2>
<form  action="formcheck.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11" align="center">
<tr><td><input type="text" id="firstname" name="firstname" placeholder="Enter Student First Name" /></td></tr>
<tr><td><input type="text" id="middlename" name="middlename" placeholder="Enter Student Middle Name" /></td></tr>
<tr><td><input type="text" id="lastname"  name="lastname"placeholder="Enter Student Last Name" /></td></tr>
<tr><td><input type="text" id="studentid"  name="studentid"placeholder="Enter Student Id Number " /></td></tr>
		<tr><td></td></tr><tr><td></td></tr>
          <tr>
        <td ><input type="submit"   value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button"   value="Reset" /></td>
	
	 </tr>
</table>

</form>
</div>
</body>
</html>
