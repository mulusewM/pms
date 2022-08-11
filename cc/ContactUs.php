<?php
	include("connection.php");  
	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact us</title>
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
 
 function checkcomment(form)
{
  var eobj=document.getElementById('commenterror');
  var scomment = form.comment.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (scomment == '') {
  error='Comment cannot be empty!';
   form.firstname.focus();
  }
  else if (scomment.length < 2) 
{
    error="comment should be atleast more than 2 characters long";
  }

  if (error)
{
   form.comment.focus();
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
 var ary=[checkFirstName,checkemail,checkcomment];
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
$Name=$_POST['firstname'];
$email=$_POST['email'];
$Comment=$_POST['comment'];
$Gender=$_POST['gender'];
 $sql="INSERT INTO comment(Name,Email,Comment,Gender) VALUES ('".$Name."','".$email."','".$Comment."','".$Gender."')";
if (!mysql_query($sql,$conn))
  {
    die('Error:'.mysql_error());
    echo' <meta content="10;ContactUs.php" http-equiv="refresh" />';		 
    }
  else
  {
echo'<p class="success" style="color:#390"> Successfully sent</p>';                                
		   echo' <meta content="10;ContactUs.php" http-equiv="refresh" />';	
}

}
	   
mysql_close($conn)
?> 
  <img src="../Image/comm.png" width="532" height="65">
                             <table cellpadding="5" cellspacing="10" align="center" style=" border-radius:10px;
			 margin-top:-5px;
             width:550px;
			 box-shadow:10px 20px 10px #993300; ">
<form action="ContactUs.php" method="post" name="form" onSubmit="return validate()"target=_self >
<tr>
<td> Name:</td>
<td><input type="text" name="firstname" id="firstname" placeholder="Enter name"/><span id="firstnameerror" class="error" ></span></td></tr>
<td>Email:</td>
<td><input type="text" name="email" id="email" placeholder="Enter email"/><span id="emailerror" class="error" ></span></td></tr>

<td>Comment:<td>
<textarea name="comment" rows="5" cols="30" id="comment" placeholder="Message"/></textarea><span id="commenterror" class="error" ></td></tr>
<tr>
<td> Gender:
   <input type="radio" name="gender"   value="female">Female
   <input type="radio" name="gender"   value="male">Male
   <span class="error"> </span></td>
<tr>
<td ><input name="submit"  type="submit" value="Add Comment" /></td><td>
<input type="reset" value="Clear" class="button" /></td>
</tr>
</form>
</table>
                </div> 
  <div id="con">
       <img src="../Image/contact.jpg" width="300" height="60">
                   <table width="300" border="" cellpadding="0" cellspacing="0" >
                                  <tbody>
                                    <tr>
                                    <tr><td ><img src="../Image/tel.png" width="100" height="50"></td></tr>
                                      <tr><td > Office :+251-25-5530334 / +251-25-5530060<br>
                                        Fax: +251-25-5530325/31 </td></tr>
                                    <tr><td ><img src="../Image/emil.jpg" width="100" height="50"></td></tr>
                                      <tr><td > SodoHRM@gmail.com </td></tr>
                                    <tr><td ><img src="../Image/post.jpg" width="100" height="50"></td></tr>
                                      <tr><td > Sodo Referral hospital<br>
                                        P.O.Box 138<br>
                                        Wolaita Sodo,SNNPR, Ethiopia </td></tr>
                                  </tbody>
                                </table>
  </div>     
              
                
                    
           
    </div>
        <!-- row end -->
  </div>
    
    
      <div id="footer" >
    <p class="footer-text">4<sup>th</sup> year Group 7 computer science Students. <br>
&nbsp;&copy; 2011 E.C. All rights reserved!</p>

</div></div></div>
</body>
</html>

