<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var employeeid = document.getElementById('employeeid');
 var first_name = document.getElementById('first_name'); 
 var last_name = document.getElementById('last_name'); 
 var email = document.getElementById('email'); // Check each input in the order that it appears in the form!
 var user_name = document.getElementById('user_name'); 
 var password = document.getElementById('password'); 
 var pinnumber= document.getElementById('pinnumber');
 if (iswordNumeric(employeeid, "Please Insert Employee ID!")) 
 { 
 if (isAlphabet(first_name, "Please Enter Only Letters For First Name!"))
    { 
  if (isAlphabet(last_name, "Please Enter Only Letters For Last Name!"))
   {
 if (emailValidator(email, "Please Enter  Valid Email  Address!")) 
   {
  if (lengthRestriction(user_name, 4, 30)) 
    { 
  if (lengthRestrictionforpassword(password, 4, 15)) 
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
 </head><style type="text/css">
<!--
body {
	background-image: url(Image/gold.jpg);
}
.style7 {font-size: 18px}
.style9 {color: #FF00FF; font-weight: bold; }
.style10 {color: #0066FF; font-size: 18px; font-weight: bold; }
.style11 {color: #FF00FF}
.style12 {color: #FF00FF; font-size: 18px; font-weight: bold; }
-->
.a input[type="text"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:blue;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="password"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:blue;
border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="submit"]{
width:65px;
height:25px;
border:1;
border-radius:5px;
border-bottom-style:solid;
border-color:#00CC33;
-webkit-border-radius:5px;
background-color:#99FF00;
}
.a input[type="reset"]{
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
</head>

<body>
<form action="createaccount_for_technical.php" onsubmit='return formValidator()'  method="POST">
  <p><br>
     <small><a href="http://www.satisfaction.com/cool-text-maker/"></a></small>
  <div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
    <div style="background-color:green; font-family:Arial, Helvetica, sans-serif; color:#00FFFF; padding:5px; height:22px; width:390px;">
      <div style="float:left;">
        <div align="right"><strong>Create account for Technical</strong></div>
      </div>
    </div>
    <table width="450" height="300" align="center" class="a">
	
	    <tr>
        <td width="142" height="24" valign="top"><div align="right" class="style10 style11">
       </div>Employee ID:</td>
        <td width="238"><input type="text" name="employeeid"  id="employeeid" Required="Required" placeholder="Enter  Employee ID!"></td>
		
      <tr>
        <td width="142" height="24" valign="top"><div align="right" class="style10 style11">
       </div>First Name:</td>
        <td width="238"><input name="first_name" type="text" id="first_name"Required="Required"  placeholder="Enter  Firstname"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style12"></div>Last Name:</td>
        <td><input name="last_name" type="text" id="last_name" Required="Required" placeholder="Enter Lastname"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style12"></div>Email:</td>
        <td><input type="text" name="email" id='email' Required="Required" autocomplete="off"placeholder="Enter Email">
            <div id='div'></div></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style12"></div>User Name:</td>
        <td><input type="text" name="user_name" id="user_name" autocomplete="off" Required="Required"placeholder="Enter User Name">
        <div id='div'></div></td>
      </tr>
	   <tr>
        <td height="24" valign="top"><div align="right" class="style9"><span class="style7"></div>Password:</td>
        <td><input type="password" name="password" id="password" Required="Required" placeholder="Enter Password"> <div id='div'></div></td>
      </tr>
	    
	   <tr>
        <td height="24" valign="top"><div align="right" class="style9"><span class="style7">
       </div>Security Code:</td>
        <td width="238"><input name="pinnumber" type="text" id="pinnumber"  Required="Required"autocomplete="off" placeholder="Enter  Security Code" /> <div id='div'></div></td>
		</tr>
		
	  <tr><td></td>
        <td height="64" colspan="2" valign="top"><p>
            <input name="submit22" type="submit" value="Save">
            <input name="submit2" type="reset" value="Cancel">
        </p>          <p>&nbsp; </p></td>
		</tr>
      </tr>
    </table>
  </div>
  <p> </p>
</form>
<p>&nbsp;</p>
</body>
</html>		
