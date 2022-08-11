<?php session_start(); ?>
     <?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM newcustomerlineconection WHERE id = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;                    				
				$firstname= $test['firstname'] ;					
				$lastname=$test['lastname'];
                 ?>
<html>
<head>
<title>technical old cuistomer reply</title>
<style type="text/css">
.a{
width:360px;
height:400px;
background-color: #CCCCFF;
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
.a input[type="number"]{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
#textarea{
width:200px;
height:100px;
border:1;
border-bottom-style:solid;
border-color:red;border-radius:5px;
-webkit-border-radius:5px;
}
#select3{
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

 var textarea = document.getElementById('textarea');
if (lengthRestriction(textarea, 6, 100)) 
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
alert("Please enter between " + min + " and " + max + " Character ");
 elem.focus(); return false; 
} 
} 
 </script>
</head>
<body>
<div class="a">
<h3>For New Line Reply</h3>
<form action="newlineReplyfromtech.php"  onsubmit='return formValidator()' method="post">
<table border="0" cellspacing="11">
<tr><td>first name &nbsp;&nbsp;<input type="text" id="firstname" name="firstname" placeholder="Enter Your first name" /></td></tr>
<tr><td>last name &nbsp;&nbsp;<input type="text" id="lastname" name="lastname" placeholder="Enter Your last name" /></td></tr>
	 <tr><td>Phone Number &nbsp;&nbsp;<input type="number" id="phonenumber" name="phonenumber" placeholder="Enter Your Phone Number" /></td></tr>
	 <tr><td>customer Id &nbsp;&nbsp;<input type="number" id="customerid" name="customerid" placeholder="Enter Your Id Number" /></td></tr>

	 <tr><td><input type="hidden" id="customerfirstname" value="<?php echo $firstname; ?>" name="customerfirstname" placeholder="Enter Customer First Name" /></td></tr>
 <tr><td  align="center"> <input type="hidden"id="customerlastname" name="customerlastname" value="<?php echo $lastname; ?>" placeholder="Enter Customer Last Name" /></td></tr>
		 <tr><td><input type="hidden" id="idnumber" name="customeridnumber" value="<?php echo $idnumber; ?>" placeholder="Enter Customer Id Number" /></td></tr>
		 <tr><td>Text Area&nbsp;&nbsp;&nbsp;<textarea height="300" width="20" id="textarea" name="textarea" placeholder="Pleace Write Your comment"/></textarea></td></td></tr>
<tr><td align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Cancel" value="Cancel" /></td></tr>
</table>
</form>
</div>
</body>
</html>

