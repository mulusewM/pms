<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">


<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/3.jpg"
demo2 = new Image();
demo2.src="images/13.jpg"
demo3 = new Image();
demo3.src="images/6.jpg"


demo4 = new Image();
demo4.src="images/2.jpg"
demo5 = new Image();
demo5.src="images/11.jpg" 
demo6 = new Image();
demo6.src="images/12.jpg"
demo7 = new Image();
demo7.src="images/6.GIF" 

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
<title>basic info </title>
</head>

<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/6.jpg" width="500px" height="125px"><img src="images/6.jpg" width="700px" height="125px">
</td>
</tr>
<tr>
<td colspan="5" width="900px">

         <ul>
		  <li><a href="home.php">Home</a></li>
		 <li><a href="aboutus.php">AboutUs</a></li>
         <li><a href="help1.php">Help</a></li>
         <li><a href="baiscinfo.php">Basicinfo</a></li>
		 <li><a href="developer.php">Developer</a></li>
		 <li><a href="contactus1.php">ContactUs</a></li>
		 
		<li><a href="login.php" id="log">Login</a></li>
         </ul>

</td>
</tr>
<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blue" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="230" height="350" bgcolor="blueblack" ><font color="black" face="monotype corsiva" size="3">
<h2 align="center">PHARMACY SYSTEM </h2><img src="images/6.GIF" width="230" height="380" align='left'>

<font valign="top" color="black" face="monotype corsiva" size="3"><h2 valign="top">&nbsp;&nbsp;&nbsp;You can see the user manual by clicking the 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help link!!</h2></font>
<a href="pharmacy_final_4.pdf" target="self">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Help</font></a>&nbsp;&nbsp;&nbsp;
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


<td  align="center" valign="top" bgcolor="white"><br>
<h2 align="center"><u>basic Information</u></h2>
<blockquote> 
<fieldset>
<p style="text-align:justify">

<blockquote> 
<p style="text-align:justify"><u>Business rules:</u><b>&nbsp;&nbsp;&nbsp;<br>

BR1: The manager should send order to the supplier <br>
BR2: The supplier should view, accept, reject order add comment<br>
BR3: Manager should View comment, process payments, check expired date,<br>
      view available drugs in the store, generate report,<br> 
      view available drug in the stock.<br>
BR4: Store coordinator should register drugs information that comes from supplier. <br>
BR5: Drugs should order in their identifiable type to facilitate searching requested drug. <br>
BR6: The pharmacist and store coordinator check expired 
         date of drugs receipt for customer<br>
BR7: Expired drugs must be removed from the pharmacy. <br>
   BR8: The cashier must prepare receipt
   </fieldset>
</p></blockquote>
<p align="center"> <b><u>Phone:</u><b>&nbsp;&nbsp;&nbsp;
<img src = "img/p.jpg" height=15>0943490374<br><b>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src = "img/p.jpg" height=15>0960787860<br><b>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;
<u>Email:</u><b>

&nbsp;&nbsp;&nbsp;
<img src = "img/e.jpg" height=15>ayisheshim.birihanie@gmail.com</p></td>


<td width=150px bgcolor="blue" height=500>
<table border=0 width=200px height=400px>
<tr>
<td border="0" height="400" width="225" bgcolor="blueblack">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" face="monotype corsiva" size="6">
<?php
echo(Date(" F d,Y"));
?>
<img src="" height="320" width="250" name="demo" >
<font face="Times New Roman" size="4" color="black">&nbsp;&nbsp;pharmacy works &nbsp;for giving service for the &nbsp;society!!!</font><br><br>
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