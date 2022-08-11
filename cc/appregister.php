<?php
	include("connection.php");  
	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration</title>
<!--slide show-->
	<link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/js-image-slider.js" type="text/javascript"></script>
    <link href="themes/8/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/tooltip.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
   <!--End of slide show-->
    <link href="ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu.js" type="text/javascript"></script>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen"/>

<script type="text/javascript">

function checkid(form) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (form.value == "") {
			
			error = " -You Didn't Enter applicant Id.\n";
		} else if (!illegalChars.test(form.value)) {
			
			error = " -The applicant id only nmuber.\n";
		} else {
			form.style.background = 'White';
		}
		return error;
	}
 function checkFirstName(form)
{
  var eobj=document.getElementById('firstnameerror');
  var sfirstname = form.firstname.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (sfirstname == '') {
  error='First Name cannot be empty!';
   form.firstname.focus();
  }
  else if (sfirstname.length < 2) 
{
    error="First Name should be atleast 2 characters long";
  }
 
  if (error)
{
   form.firstname.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
  function checkMiddlename(form)
{
  var eobj=document.getElementById('firstnameerror');
  var sfirstname = form.middlename.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (smiddlname== '') {
  error='Middle Name cannot be empty!';
   form.middlename.focus();
  }
  else if (smiddlname.length < 2) 
{
    error="Middle Name should be atleast 2 characters long";
  }
 
  if (error)
{
   form.middlename.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 
 function checklastName(form)
{
  var eobj=document.getElementById('lastnameerror');
  var slastname = form.lastnamename.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (slastname== '') {
  error='Last Name cannot be empty!';
   form.lastname.focus();
  }
  else if (slastname.length < 2) 
{
    error="First Name should be atleast 2 characters long";
  }
 
  if (error)
{
   form.lastname.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 
 //function checkphonenumber(form) {
		//var error = "";
		//var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		//if (form.value == "") {
			
	//		error = " -You Didn't Enter applicant phonenumber.\n";
	//	} else if (!illegalChars.test(form.value)) {
			
	//		error = " -The applicant phonenumber only number.\n";
	//	} else {
	//		form.style.background = 'White';
	//	}
	//	return error;
	//}
 
 function checkappifo(form)
{
  var eobj=document.getElementById('appifoerror');
  var sappifo = form.appifo.value;
  var oRE = /^[a-zA-Z]+$/;                  
  var error=false;
  eobj.innerHTML='';
  if (sappifo == '') {
  error='appifo cannot be empty!';
   form.firstname.focus();
  }
  else if (sappifo.length < 2) 
{
    error="appifo should be atleast more than 2 characters long";
  }

  if (error)
{
   form.appifo.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }




 
 function checkemail(form)
{
  var eobj=document.getElementById('emailerror');
  var semail = form.email.value;
  var oRE = /([\w\-]+\@[\w\-]+\.[\w\-]+$)/;
  var error=false;
  eobj.innerHTML='';
  if (semail == '') {
   error=' Email cannot be empty!';
   form.email.focus();
  }
  
  else if (!oRE.test(semail))
{
   error="Please insert Valid email format.";
  }
  if (error)
{
   form.email.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }


function validate() 
 {
 var form = document.forms['form'];
 var ary=[checkid,checkFirstName,checkMiddlename,checklastName,checkemail,checkappifo];
 var rtn=true;
 var z0=0;
 for (var z0=0;z0<ary.length;z0++)
{
  if (!ary[z0](form))
  {
    rtn=false;
  }
 }
 return rtn;
}
</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css" rel="stylesheet">
        /*The following are for this demo page only (not required for the ddmenu).*/
        body { }
    </style>
<style type="text/css">
h1,h2,h3,h4,h5,h6 {
	font-weight: bold;
}
body,td,th {
	color: #000;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#Content1{
 border-radius:50px;
			 margin-top:15px;
			 box-shadow:10px 20px 10px #993300; 
}
</style>



</head>
<body style="">
<div id="outer">
<div id="one"> 
<div id="holder">
  <div id="station">
  <div id="logo_text"> <img src="../Image/h.PNG" alt="tree tops" width="902" height="180" /> </div>
  </div>
   
  <div id="topss" >
 <nav id="ddmenu">
    
    <ul>
        <li class="no-sub">
           <a class="top-heading" a href="Home.php">Home</a>
			          
            
        </li>
        <li class="no-sub">
		<a class="top-heading" a href="ContactUs.php">Contact us</a>
		</li>
        
        <li class="no-sub">
            <a class="top-heading" a href="AboutUs.php">About Us</a>
			
           
        </li>
        <li class="no-sub">
            <a class="top-heading" a href="Vacancy.php">Vacancy  Announce</a>
        </li>
		
		<li class="no-sub">
            <a class="top-heading" a href="appregister.php">Registration</a>
        </li>
		
		<li class="no-sub">
            <a class="top-heading" a href="logini.php">Login</a>
        </li>
          <li class="no-sub">
            <a class="top-heading" a href="help.php">Help</a>
        </li>
    </ul>
</nav>

</div>
<br />
<div id="slides">

<div id="content1">
<?php
 if(isset($_POST['submit']))
 {
$Id=$_POST['Id'];
$FName=$_POST['firstname'];
$MName=$_POST['middlename'];
$LName=$_POST['lastname'];
$dept=$_POST['dept'];
$arank=$_POST['arank'];
$pnumber=$_POST['pnumber'];
$email=$_POST['email'];
$gpa=$_POST['gpa'];
$experience=$_POST['experience'];
$appifo=$_POST['appifo'];
$Gender=$_POST['gender'];
 $sql="INSERT INTO app_register(Id,FName,MName,LName,dept,arank,pnumber,Email,gpa,experience,appifo,Gender) VALUES 
 ('".$Id."','".$FName."','".$MName."','".$LName."','".$dept."','".$arank."','".$pnumber."','".$email."','".$gpa."','".$experience."','".$appifo."','".$Gender."')";
if (!mysql_query($sql,$conn))
  {
         
		 echo'<P style="color:red" > Sorry Error Occured Because One is Registered By this Applicant ID</p>';
		 echo' <meta content="10;appregister.php" http-equiv="refresh" />';
		 
    }
  else
  {
echo'<p class="success" style="color:#390"> Successfully Registered!</p>';                                
		   echo' <meta content="10;appregister.php" http-equiv="refresh" />';	
}

}
	   
mysql_close($conn)
?> 

 <div class='header' align="center">
 <h2>Applicant Registration Form</h2>
 </div>
                             <table cellpadding="0" cellspacing="10" align="center" style=" border-radius:20px; >
			<!-- margin-top:0px;
            width:400px;
			 box-shadow:5px 20px 5px 20px; "-->
<form action="appregister.php" method="post" name="form" onSubmit="return validate()"target=_self >
<tr>
<td> Identification Number:</td>
<td><input type="text" name="Id" id="Id"required placeholder="Enter Id"/><span id="Iderror" class="error" ></span></td></tr>
<td> First Name:</td>
<td><input type="text" name="firstname" id="firstname"required placeholder="Enter Fname"/><span id="firstnameerror" class="error" ></span></td></tr>
<td>Middle Name:</td>
<td><input type="text" name="middlename" id="middlename"required placeholder="Enter Mname"/><span id="middlenameerror" class="error" ></span></td></tr>
<td> Last Name:</td>
<td><input type="text" name="lastname" id="lastname"required placeholder="Enter Lname"/><span id="lastnameerror" class="error" ></span></td></tr>
<td> Department:</td>
<td><input type="text" name="dept" id="dept"required placeholder="Enter dep't"/><span id="depterror" class="error" ></span></td></tr>
<td> Acadamic Rank:</td>
<td><input type="text" name="arank" id="arank"required placeholder="Enter arank"/><span id="arankerror" class="error" ></span></td></tr>

<td> Phone Number:</td>
<td><input type="text" name="pnumber" id="phonenumber"required placeholder="Enter Pnumber"/><span id="phonenumbererror" class="error" ></span></td></tr>
<td>Email:</td>
<td><input type="text" name="email" id="email" placeholder="Enter email"/><span id="emailerror" class="error" ></span></td></tr>
<td>Gpa:</td>
<td><input type="text" name="gpa" id="gpa"required placeholder="Enter gpa"/><span id="gpaererror" class="error" ></span></td></tr>
<td>Experience</td>
<td><input type="text" name="experience" id="experience"required  placeholder="Enter experience"/></td></tr>
<td>Additional Info:<td>
<textarea name="appifo" rows="5" cols="22" id="appifo"required placeholder="Please write your Additional Info about you here?"/></textarea><span id="appifoerror" class="error" ></td></tr>
<tr>
<td> Gender:
   <input type="radio" name="gender"   value="female">Female
   <input type="radio" name="gender"   value="male">Male
   <span class="error"> </span></td>
<tr>
<td ><input name="submit"  type="submit" value="Submit" /></td><td>
<input type="reset" value="Clear" class="button" /></td>
</tr>
</form>
</table>
                </div> 
  <div id="con">
       <img src="../Image/rr.png" width="305" height="550">
                   
  </div>       
  </div>
        <!-- row end -->
  </div>
    
	
	    <div id="footer" >
        <div id="content2">
                    <div class="cusCare">
                      <p align="center">
					  <a href="https://www.facebook.com">  <img src="../Image/icon_facebook.png" width="34" height="35"></a>
                      <a href="https://www.youtube.com"><img src="../Image/icon_youtube.png" width="31" height="36"></a>
                      <a href="https://www.twitter.com"><img src="../Image/icon_twitter.png" width="33" height="36"></a>
                    </div></p>
                    <div class="greeting">
                   
<?php
echo '<hr>';
echo'<p align="center">';
include('Clock.php');
echo'</p>';
?>
       </div>
       </div>
       </div>
    
      <div id="footer" >
      <p class="footer-text">4<sup>th</sup> year Group 7 computer science Students. <br>
      &nbsp;&copy; 2011 E.C. All rights reserved!</p>
     </div>






</div></div>
</body>
</html>

