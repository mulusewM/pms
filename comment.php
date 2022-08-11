<?php
	include("connection.php"); 
?>	
   <?php

$user_id=$_SESSION['user_id'];

$result=mysql_query("select * from users where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>
<html>
<head>
  <script type='text/javascript'>
function formValidation(){
//assign the fields
        
		var email=document.getElementById('email');
		var fname = document.getElementById('fname');
	var message = document.getElementById('message');
	if(emailValidator(email,"check your E-mail format")){
if(lengthRestriction(fname, 5, 25,"for your full name")){
if(lengthRestriction(message, 3, 100,"for your comment")){


	return true;
	}
	}
	}	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9+]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function alpha(e) {
var k;
document.all ? k = e.keyCode : k = e.which;
return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8);
}
	</script>
	<script type="text/javascript">
function mtuvms(eid,errid)
{
var x=document.getElementById(eid).value;
if(x=="")
{
document.getElementById(errid).innerHTML="pls fill this field";
}
else
{
document.getElementById(errid).innerHTML="";
}
}

function chkAplha(event,err)
{
if(!((event.which>=65 && event.which<=90) || (event.which>=97 && event.which<=122) || event.which==0 || event.which==8))
{
document.getElementById(err).innerHTML="Pls Enter Letter Only!!";
return false;
}
}
function chkAplha(event,err)
{
if(!((event.which>=65 && event.which<=90) || (event.which>=97 && event.which<=122) || event.which==0 || event.which==8))
{
document.getElementById(err).innerHTML="Pls Enter Letter Only!!";
return false;
}
}

function chkeid()
{
var e=document.getElementById("e").value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if(atpos<4 || dotpos<atpos+3)
{
document.getElementById("error2").innerHTML="invalid email";
}
else
{
document.getElementById("error2").innerHTML="";
}
//alert(atpos+" "+dotpos);
}
</script>
</head>
<?php
		
		include("headerr.php");
	
?>


<html>
<head>

<title>PHARMACY</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:0px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:150px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;">Pharmacy management system</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2" >
		<h2><u>Drug information</u></h2>
		<ul >
		 <li><a href="comment.php">comment</a></li>
		  <li><a href="home.php">Home</a></li>
		
		
			
         </ul>
<form action="comment.php" method="post" onsubmit='return formValidation()'>
<center>
<p><font size="5" color="magneta"><u>Submit Your Comment</u></font></p>
  <table style="color:black" width="480px" valign="top" align="center" border="0">
  <tr>
    <td  style="padding-top:12px;"> First Name:</td>
<td style="padding-top:12px;"><input type='text' name='fname' required x-moz-errormessage="Enter first name" "<?php echo $FirstName;?>"></td>
 </tr> 
   <tr>
    <td  style="padding-top:12px;"> Last Name:</td>
	<td style="padding-top:12px;"><input type='text' name='lname' required x-moz-errormessage="Enter last name" "<?php echo $middleName;?>"></td>
 </tr>
		  <tr style="padding-top:12px;">
		<td> Email Address:</td>
<td class="col"><input type="text" name="email" id="email" required x-moz-errormessage="Please Select Type Email " title="Please Enter Letter Only" id="e"  onblur="btvms('e','error12')"/></td>
<td class="col" id="error2" style="color:red"></td>
</td></tr>
	<tr style="padding-top:12px;">      
	<td> Message:</td>
		   <td><textarea rows="6" cols="30" align="center" name="com" id="message" placeholder='Write your comment here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
<tr style="padding-top:12px;"><td> Date:	</td>
<td ><input type="text" required x-moz-errormessage="Enter Your Place Start"  name="Dates" value="<?php
echo strftime ('%x');
?>"  </td> </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td style="padding-top:12px;"><input type="submit" class="button_example" name="sent" value="Send"/></td>
  </tr>
</table> 	
</center>  
</form>
<?php
 if(isset($_POST['sent']))
 {
  $Dates=$_POST['Dates']; 
$sql="INSERT INTO comment (fname,lname, email, message,Dates,status)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[com]','$Dates','unread')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
		 echo'  <p class="success">Your Message has been Sent successfuly!</p>';
         echo' <meta content="5;submit_comments.php" http-equiv="refresh" />'; 
		 }
mysql_close($conn)
?>
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table >

<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="4">pharmacy</font></th>
</tr>


<tr>
<td ><img src="slideshow/images/12.jpg" style="height:320px;"  valign="top"></td>
</tr>

</table>
<table border="0">
<tr>
<th width="250px" bgcolor="#336699" height="25px"><font face="times new Roman" color="white" size="5"><center>Find Us</center></font></th>				
</tr>
<tr><td>
                     <a href="http://www.facebook.com"> <img src="images/facebook.jpg" width="70px" height="70px" style="margin-top:30px;"></a>&nbsp
					
					<a href="http://www.gmail.com"> <img src="images/email.png" width="40px" height="30px"style="margin-top:30px;"</a>&nbsp &nbsp &nbsp
					
					<a href="http://www.yahoo.com"> <img src="images/yahoo.png" width="40px" height="30px"style="margin-top:30px;"</a>
				
</td></tr>
</table>



</td>
<?php
include("footer.php");
?>

<!--End Of Sub menus-->
</body>
</html>