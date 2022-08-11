<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">



<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/1.jpg"
demo2 = new Image();
demo2.src="images/2.jpg"
demo3 = new Image();
demo3.src="images/3.jpg"


demo4 = new Image();
demo4.src="images/6.GIF"
demo5 = new Image();
demo5.src="images/11.jpg" 
demo6 = new Image();
demo6.src="images/12.jpg"
demo7 = new Image();
demo7.src="images/13.jpg" 

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
<title>Developer Page</title>
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
<li><a href="aboutus.php">About US</a></li>
<li><a href="baiscinfo.php">basicinfo</a></li>
<li><a href="developer.php">Developer</a></li>
<li><a href="contactus1.php">contact Us</a></li>

<li><a href="help1.php">Help</a></li>

<li><a href="login.php" id="login"><b>Login</a></li>
 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blue" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="230" height="350" bgcolor="blueblack" ><font color="black" face="monotype corsiva" size="3">
<h2 align="center">pharmacy </h2><img src="images/6.GIF" width="230" height="380" align='left'>

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
<!--------body  --->
<center>
<fieldset>
 <h1>Developer</h1>
 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ayisheshim Birhanie ID-NO:TER/041/08<br>
<img src = "img/a.jpg" height=30>Role in project:programer<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "img/e.jpg" height=20>Email:ayisheshim.birihanie@gmail.com<br>
<img src = "img/p.jpg" height=20>Phone:+251943490374<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Melese Ebabu ID-NO:TER/060/08<br>
&nbsp;&nbsp;<img src = "img/m.jpg" height=30>Role in project:System Analyst<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "img/e.jpg" height=20>Email: meleseadino@gmail.com<br>
<img src = "img/p.jpg" height=20>Phone: +251949986888<br><br>

  Gebrye Dessie ID-NO:TER/049/08<br>
<img src = "img/g.jpg" height=30>Role in project:manager<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "img/e.jpg" height=20>Email:gebryedesse@gmail.com<br>
<img src = "img/p.jpg" height=20>Phone:+251941699473<br><br>

  Yishamu Getenet ID-NO:TER/033/07<br>
<img src = "img/y.jpg" height=30>Role in project:gathering requirement<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "img/e.jpg" height=20>Email:yishamugetenet@gmail.com<br>
<img src = "img/p.jpg" height=20>Phone:+251939716871<br><br>

</fieldset>
</center>

<td width=150px bgcolor="blue" height=500>
<table border=0 width=200px height=400px>
<tr>
<td border="0" height="400" width="225" bgcolor="blueblack">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" face="monotype corsiva" size="6">
<?php
echo(Date(" F d,Y"));
?>
<img src="" height="320" width="250" name="demo" >
<font face="French Script MT" size="5" color="black"><b>&nbsp;&nbsp; pharmacy Works<br> &nbsp;&nbsp;&nbsp;&nbsp;For giving service for the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;society!!!</b></font><br><br>
<font face="Times New Roman" size="4" color="black">The pharmacy plays a greate role in stisfying the need of the society. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
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

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blueblack" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pms 2011. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>