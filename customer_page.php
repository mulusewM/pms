<?php
include('form1/db1.php');
session_start();      
if (!isset($_SESSION['id'])){
header('location:index.php?err');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Customer Page</TITLE>

<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<link rel="stylesheet" type="text/css" href="main.css" />
<style type="text/css">
*{
margin:top;
padding:0;
}
#nav {
list-style: none;
height:2em;
}
#nav li {
position:relative;
float:left;
width:192px;
background: #FF6666;
text-align:center;
}
#nav li:hover {
background: #00CCFF;
}
#nav a {
display:block;
color: #FFFF00;
text-decoration:none;
line-height:2em;
}
/* --------- Drop Down -------- */
#nav ul {
position:absolute;
left:-999em;
top:4em;
list-style:none;
}
#nav li:hover ul {
left:0;
top:auto;
}
* {
margin:0;
padding:0;
}
#nav {
list-style:none;
height:2em;
}
#nav li {
position:relative;
float:left;
width:222px;
background: url(images/stories/Department/navline.jpg);
text-align:center;
}
#nav li:hover {
background:#00CCFF;
}
#nav a {
display:block;
color:#FFFF00;
text-decoration:none;
line-height:2em;
}
/* --------- Drop Down -------- */
#nav ul {
position:absolute;
left:-999em;
top:4em;
list-style:none;
}
#nav li:hover ul {
left:0;
top:auto;
}
.iframe{ margin:top;}


body {
	background-color: rgba(6, 35, 20, 0.34);
}
.style1 {color: #0000FF}
.style2 {font-size: 20px}
.style4 {color: #0000FF; font-weight: bold; }
.style6 {color: green}
.style7 {color: red}
.style8 {color: #FF0000}
</style>
</style> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<BODY  bgcolor="#003300">
<table align="center" width="2202"  cellpadding="0" cellspacing="0" style=" background-color: c;box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:950px; height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px #99ccff;">
  <tr   bgcolor="#003333">
    <td  height='0'  colspan='9'></td>
  </tr>
  
  <tr>
    <img src="Image/Capture1.jpg" width="1100" height="150"border="3"
  </tr>
  </td><td bgcolor="#003333"  width='255'height='37'align='center' ><div align="right"><a href='customer_page.php'><strong><font color="white">Home</font></strong></a></div></td>
     <td bgcolor="#003333"width='119'height='37'align='center' ><div align="center"><strong><a href='users.php' target="myframe"><font color="white">Users</font></a></strong></div></td>
    <td bgcolor="#003333"width='119'height='37'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="white">Contact us</font></a></strong></div></td>
    <td bgcolor="#003333"width='153'height='37'align='center' ><div align="center"><strong><a href='info.php' target="myframe"><font color="white">About Us </font></a></strong></div></td>
	<td bgcolor="#003333"width='153'height='37'align='center' ><div align="center"><strong><a href="form1/Logout.php"><font color="white">Logout</font></a></strong></div></td>
  <tr bgcolor="#f5f5dc">
    <td "height='200'  style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:brown;">      <div id="adHeader">
       <!-- <h3 style="bgcolor:#000066"><font color="green">Customer Module</h3> -->
        <p><strong><center><font size="+4"></font></center></strong><br />
  </p>
</div>
	 <div id="leftsidebar">
<ul id="nav">
<li><a href=""><span class="white"> <font color="white">Customer Can :- </font></span></a>
              <!--<ul>-->
			    <li><a href="form1/CustomerNewlineconnctionform.php" target="myframe">NewCustlineConnecOrder</a></li>
				<li><a href="form1/old_custome_ order_maintenance form.php" target="myframe"><span class="style10">Old Cust Maint Order</span></a></li>
				<li><a  href="form1/searchfeedbackfromtechnical.php" target="myframe"><span class="style10">Search Techn Feedback</span></a></li>
				 <li><a href="form1/CustomerSearchPayment.php" target="myframe"><span class="style10">View Payment/Consump</span></a></li>
				 <li><a href="form1/Customerbankaccount.php" target="myframe"><span class="style10">create  bankaccount</span></a></li>
				  <li><a href="details.php" target="myframe"><span class="style10">pay their own water cunsumtion value</span></a></li>
   </ul>
</li>
</p></td>
    <td  background="../image/gold.jpg"colspan="5" rowspan="3" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><center>

   <p> <span class="style1"><font size="+3"> Welcome To Customer Page</span></center>
   <p align="center">
     <iframe  src="phome.php"name="myframe" frameborder="2"  width="650" marginwidth="" height="590" align="center" marginheight="" scrolling="auto" ></iframe>
   <marquee>
   </marquee></td>
    <td height=200 colspan="3" rowspan="2" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;"><div align="center"><span class="style4">
      
        <marquee direction="up" behavior="scroll" truespeed="truespeed">
      </span>
    </div>
      <p align="center" class="style2"><span class="style4"><font color="red" fontsize="400">Welcome To <br>
Customer Page !</font></span> </p>
	 <p><img src="Image/68.jpg" width="194" height="273"></p>
	<p></marquee>&nbsp;<img src="Image/13.jpg" width="192" height="150"></p>		</td> 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td  height='204'>
   <!-- <p align="center"> <p align="center"><center><embed src="http://www.satisfaction.com/photo-cube-generator/show.swf?baseURL=http://www.satisfaction.com/photo-cube-generator/&clickURL=http://www.satisfaction.com/photo-cube-generator/&flashLABEL=w&clickLABEL=Photo Cube Generator&file=http%3A%2F%2Fwww%2Esatisfaction%2Ecom%2Fphoto%2Dcube%2Dgenerator%2Fuploads%2F07%5F05%5F2014%2F08%2Fpic30410463%2Ejpg" quality="high" bgcolor="#ffffff" width="255" height="250" name="show" align="middle" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />-->
    <small>&nbsp;</p>      </td>
  </tr>
  <tr bgcolor="#f5f5dc">
   <!-- <td height="252" background="image/sc3.jpg"></td>
    <td background="image/sc3.jpg"><p><a href=""target="myframe"><span class="style10"><span class="style8"></span></a> </p> -->   </td>
  </tr>
  
  
  <tr background="image/ee.jpg">
    <td  height='77'  colspan='10'>
      <p align="center" class="style6"><span class="style4">
        <span class="style7">
      Copy right © 2019 Customer Service Management System
    </span>
  <a href="#top"> Bottom to Top </a>  </tr>
</table>
<TR bgcolor="#f5f5dc">

  <TD >
</TR>
</p>
</HTML>

<?