<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var employeeid = document.getElementById('employeeid');
 var pinnumber= document.getElementById('pinnumber');
 if (iswordNumeric(employeeid, "Please Insert Employee ID!")) 
 {  
   if (isNumeric(pinnumber, "Please Enter Only Number for Pin Number!"))
    {
 return true;
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
height:250px;
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
<title>technicianrecoveryform</title></head>
<body>
<div class="a">
<h4>Reset Your Account By Filling The Following Feilds!</h4>
<form action="technicianrecoveryaccount.php" onSubmit="return formValidator()" method="post">
<table border="0" cellspacing="11">
<tr><td>Employee ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="employeeid" id="employeeid" Required="Required" placeholder="Insert Your Employee Id!" title="Employee Id is needed!" /></td></tr>
<tr><td>Security Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pinnumber" id="pinnumber" Required="Required" placeholder="Insert Your Security Code!" title="Security Code is needed!" /></td></tr>
<tr><td></td></tr>
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="Submit" value="submit" />&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Reset" value="Reset" /></td></tr>
</table>

</form>
</div>
</body>
</html>
