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
<title>pharmacy's MVV page</title>
</head>
<body   bgcolor="white"  onLoad="timeimgs('1');" >
<table align="center" width=1200px height="700" border=0 >
<tr><td height=20px  colspan=3>
<img src="images/1.jpg" width="500px" height="125px"><img src="images/3.jpg" width="700px" height="125px">
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
<td  height=500px width=150px  valign=top border="0" bgcolor="#336699" >
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

 pharmacy had began providing health sevices to the people in the previous years ago.pharmacy focus 
 on primary care the specialties of family practice, pediatrics, and in general internal medicine. the pharmacy emphasize
the importance of long-term doctor/patient relationships and the coordination of care.</p> </blockquote>
<h3><u>Mission</u></h3>
<blockquote> 
<p style="text-align:justify">
  
TO be recognized nationally and internationally as aleader in pharmacy education research and service that partiners effectively with others the promotes, the discovery, development and appropriate use of medications for the welfare and safety of the public.</p> </blockquote>
<h3><u>Vision</u></h3>
<blockquote> 

      <p style="text-align:justify">
               value
service to the local, national and global community.Integrity and ethical behaviour. Innovation and collaboration in research. Profissional practice and education.
Personal growth through lifelong learning. Diversity and respect for all individuals. Cultural competence.</p> </blockquote>
<h3><u>Value</u></h3>
<blockquote> 

<p style="text-align:justify">
patient care: being an integral member of the healthcare team resposible for the outcomes associated with the medication use process
.Recognizing that the pharmacy staff is our most important resource. 
Contributing to and accepting responsibility for optimal therapeutic outcomes including promoting wellness. 
Fostering an enviroment that promotes the safe, effecious, and cost effective use of medication.
Improving the medication use process to enhance continity of care
Making decision supported by evidence based on medicine through research on medication use and patient safty.

</p></blockquote>


<td width=150px bgcolor="blue" height=500>
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