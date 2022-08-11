<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">

<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/3.jpg"
demo2 = new Image();
demo2.src="images/1.jpg"
demo3 = new Image();
demo3.src="images/2.jpg"


demo4 = new Image();
demo4.src="images/3.jpg"
demo5 = new Image();
demo5.src="images/6.jpg" 
demo6 = new Image();
demo6.src="images/14.jpg"
demo7 = new Image();
demo7.src="images/12.jpg" 

}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<title>Help page</title>
</head>
<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/1.jpg" width="500px" height="125px"><img src="images/3.jpg" width="700px" height="125px">
</td>
</tr>

<td  height="30px" colspan=3 >
 <div id="dropdown">
<li><a href="home.php">Home</a></li>
<li><a href="baiscinfo.php">basicinfo</a></li>
<li><a href="aboutus.php">About US</a></li>
<li><a href="developer.php">Developer</a></li>
<li><a href="contactus1.php">contact Us</a></li>

<li><a href="help1.php">Help</a></li>

<li><a href="login.php" id="login"><b>Login</a></li>
 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blueblack" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="230" height="350" bgcolor="#336699" ><font color="black" face="monotype corsiva" size="3">
<h2 align="center">PHARMACY SYSTEM </h2><img src="images/6.jpg" width="230" height="380" align='left'>

<font valign="top" color="black" face="monotype corsiva" size="3"><h2 valign="top">&nbsp;&nbsp;&nbsp;You can see the user manual by clicking the 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help link!!</h2></font>
<a href="final_pharmacy management_4.pdf" target="self">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Help</font></a>&nbsp;&nbsp;&nbsp;
</td>
</tr>
 <tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>

<td  valign="top" bgcolor="white">

<p style="text-align:justify">
<h3>GUID LINES TO MANAGE PHARMACY MANAGENENT SYSTEM</h3>
 </p> </blockquote>
<h3><u>Guid lines to login the system </u></h3>
<blockquote> 
<p style="text-align:justify">
  
   
 1.users should be click the login button<br>
 2.the system displays the login form<br>
 3.the user should enter correct user name and password and click login button<br>
 4.the system displays the appropraite page  
 </p> </blockquote>
<h3><u>Guide line to register new drugs</u></h3>
<blockquote> 

      <p style="text-align:justify">
        1.the store coordinator login to store coordinator page.<br>
		2.the system display Recored new drugs form.<br>
		3.the store coordinator should enter Drugname,<br>
		drugtype,manu_date,expiredate,quantity,unitcost,selling price,recoreded date properly.<br>
		4.the store coordinator click submit button<br>
		 5.the system displays successfuly Recoreded and store the information in the database.
			   </p> </blockquote>
<h3><u>Guide lines to send drug order information</u></h3>
<blockquote> 

<p style="text-align:justify">
1.the manager clicks the send order button. <br>
2.the system display send drug order information.<br>
3.the manager fill the form and click send button.<br>
4.the system display order send  successfuly! alert.

</p></blockquote>
<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="red" size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp;
<center><img src = "img/cap.jpg" height=50></center>
</font></td></tr></table>

<td width=150px bgcolor="#336699" height=500>
<table border=0 width=200px height=400px>
<tr>
<td border="0" height="400" width="225" bgcolor="blueblack">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" face="monotype corsiva" size="6">
<?php
echo(Date(" F d,Y"));
?>
<img src="" height="320" width="250" name="demo" >
<font face="Times New Roman" size="4" color="black"><b>&nbsp;&nbsp; pharmacy  system works for giving service for the society!!!</b></font><br></br>
<font face="Times New Roman" size="4" color="black"><b>The pharmacy plays a greate role in stisfying the need of the society.</b> 
<br><br><br><br><br>
</td>
</tr>
<tr>


</td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan=3>

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blue" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Sys 2011. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>

</body>
</html>