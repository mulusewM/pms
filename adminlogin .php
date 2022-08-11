<html>
<head>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var user_name = document.getElementById('user_name'); 
 var password = document.getElementById('password'); 
  if (lengthRestriction(user_name, 4, 30)) 
    { 
  if (lengthRestrictionforpassword(password, 4, 15)) 
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
function lengthRestriction(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please Enter Valid Username!");
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
alert("Please Enter Valid Password!");
 elem.focus(); return false; 
} 
} 
 </script>
<style type="text/css">

form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:370px;
height:280px;
font-family: ;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: ;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #99779;
border: inset 0px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
.style1 {
    color:#000033;
	font-weight: bold;
}
.style2 {color: #0000FF}
body {
	background-image: url(Image/main.jpg);
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
.a input[type="text"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
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
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body ><p align="center">
 

<table width="463" border="0" class="a">
  <tr>
    <td width="64" height="221">&nbsp;</td>
    <td width="389">
	<form action="form1/adminlogincode.php" onsubmit='return formValidator()' method='POST'   target="_top" id='form1'>
      <h2 align='center' class="style1">Admin Login Page</h2>         
      <div align="center"><span class="style2"></span>   
         <font color="#000033" size="+1">UserName</font>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="user_name" id="user_name" autocomplate="off" Required ="Required"placeholder="Enter User Name" id="username">
        <br>
        <br>
        <span class="style2"></span>
        <font color="#000033" size="+1">Password</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"  id="password" Required ="Required" placeholder="Enter password">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="myframe" href="adminrecoveryform.php"><h4>Lost Your Account?</h4></a>	  
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name="submit" value="login" />&nbsp;&nbsp;
		                                            <input type='reset' value='Reset' />
      </div>
    </form></td>
  </tr>
</table>
</p>
</body></html>

