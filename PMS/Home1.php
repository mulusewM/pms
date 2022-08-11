<?php
		
		include("headerr.php");
	
?>

<html>
<head>

<title>pharmacy</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<!--<img style=" margin-bottom:0px;margin-top:23px;border-radius:0px;" src="img/km.png" align="center" width="700px" ></p>-->
</td>
</tr>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="developer.php">Gallary</a></li>
		 <li><a href="viewdorm.php">Basic information</a></li>
		 <li><a href="help.php">Help</a></li>
		 <li><a href="login.php" id="log">Logout</a></li>
         </ul>
		
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table>

<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="4">pharmacy</font></th>
</tr>


<tr>
<td > <img src="slideshow/images/2.png" style="height:320px;"  valign="top"></td>
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
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
	
<div style="width:420px;  margin:0 auto; position:relative;  solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:0px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 50px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="login.php" onsubmit="return validateForm() " onsubmit="return formValidation()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div><strong><font color="white" size="4px"font-family="times new romman"; ><center>Drug Registration Form</center></font></strong></div>
 
 
 
 </div>
 
 
  <table width="286" valign="top" align="center" border="0">
  
  <tr>

	       <td class='para1_text' width="220px"><font color="red"></font> <b>Drug Code:</b></td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font><b> Drug Type:</b></td><td><input type="password" name="password" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"><font color="red"></font> <b>Drug Name:</b></td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font><b> Manuf.date:</b></td><td><input type="password" name="password" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
	     </tr>	 
	<tr>

	       <td class='para1_text' width="220px"><font color="red"></font> <b>Exp. Date:</b></td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font><b> Quantity:</b></td><td><input type="password" name="password" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
	     </tr>
	<tr>

	       <td class='para1_text' width="220px"><font color="red"></font> <b>cost Price:</b></td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font><b> Selling Price:</b></td><td><input type="password" name="password" id="password" required x-moz-errormessage="Enter password" maxlength="15"></td>
	     </tr>	 
  <tr>
    <td><div align="right"></div></td>
    
  </tr>
  <tr>
    <td>&nbsp&nbsp;</td>
	<br>
    <td><input type="submit" name="submitlogin" class="button_example" value="Submit" />&nbsp&nbsp
	<input type="submit" name="submitlogin" class="button_example" value="Clear" /></td>
  </tr>
</table> 
  </form>
<!--Php Script-->  
	   
	   

</div>
</td>
</tr>
</table>
<!--End Body of section-->
</table>

<!--Footer-->

<div id="sampl">
      <footer>
	  <br>
	  <div align="right">
<a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy 2011 PMS. All rights reserved.</font></p>
		<br><br>
		<div align="center">
		&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="4">
		<a href="index.php">Home</a>&nbsp;|&nbsp;<a href="about.php">About Us</a>&nbsp;|&nbsp;<a href="contact.php">Contact Us</a>&nbsp;</font>
		</div>

      </footer>
</div>

<!--End of Footer-->
                                                                        
</body>
</html>
