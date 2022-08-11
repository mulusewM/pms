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
<TITLE>Bill officer page</TITLE>

<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<link rel="stylesheet" type="text/css" href="main.css" />
<style type="text/css">
<!--
-->
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
width:225px;
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
.style1 {color: black}
.style2 {font-size: 18px}
.style4 {color: #0000FF; font-weight: bold; }
.style6 {color: green}
.style7 {color: red}
</style>

</style> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<BODY  bgcolor="#003300">
<table align="center" width="1047"  cellpadding="0" cellspacing="0" style=" background-color:
    E9FFFA;box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:950px;height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px FFF3FC;">
  <tr   bgcolor="#003333">
    <td  height='0'  colspan='9'></td>
  </tr>

  <tr>


<img src="Image/Capture1.jpg" width="1070" height="150" border="3"


  </tr>
  </td>   
  <td bgcolor="E9FFFA"  width='200'height='37'align='center' ><div align="right"><a href='Billofficer_page.php'><strong><font color="0A0963">Home</font></strong></a></div></td>
    
 <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='Users.php' target="myframe"><font color="0A0963">Users</font></a></strong></div></td>
     <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='info.php' target="myframe"><font color="0A0963">About us</font></a></strong></div></td>
    <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="0A0963">Contact us</font></a></strong>
	<td bgcolor="E9FFFA"width='236'height='37'align='center' ><div align="center"><strong><a href="form1/Logout.php"><font color="0A0963">Logout</font></a></strong></div></td>
	</div></td>
  </tr>
  <tr bgcolor="#f5f5dc">
    <td  style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:brown;">
      <div id="adHeader">
       <!-- <h3 style="bgcolor:#000066">Bill officer  Module</h3> -->
        <p><strong><center><font size="+4"></font></center></strong><br />
  </p>
</div>
	 <div id="leftsidebar">
<ul id="nav">
  
<li><a href=""><span class="black"><font color="Black">Bill officer  can :- </font></span></a>
             <!-- <ul>-->

    <li> <a href="form1/billoficerviewregistration.php" target="myframe"><span class="style10"><font color="white">View New Registration</font></span></a></li>
	 <li> <a href="form1/billofficercustomerrigistrationform.php" target="myframe"><span class="style10"><font color="white">Approve Customer</font></span></a></li>
	     <!-- <li> <a href="form1/billoficerviewmeterreaderreport.php" target="myframe"><span class="style10"><font color="white">View Meter Reader Report</font></span></a></li> -->
		 	<li> <a href="form1/billofficerrecordconsumptionform.php" target="myframe"><span class="style10"><font color="white">Record consumption</font></span></a></li>
	<li> <a href="form1/billofficersearchpayementinformation.php" target="myframe"><span class="style10"><font color="white"> View Payement Report</font></span></a></li>
		<li> <a href="form1/calculatebill.php" target="myframe"><span class="style10"><font color="white"> Calculate Cost of Bill</font></span></a></li>
	   <!--</ul>-->
</li>
</p></td>
    <td  background="../image/new1.jpg"colspan="5" rowspan="3" style="font-style:italic;box-shadow:rgba(0,0,0,0# 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><center>

   <p> 
   <span class="style1"><font size="+3">Welcome To Bill officerPage</marquee> </span></center>
   <p align="center">
     <iframe  src="pbill.php"name="myframe" framebporder="2"  width="650" marginwidth="" height="590" align="center" marginheight="" scrolling="auto" ></iframe>
     <marquee></marquee></td>
    <td background-color: rgba(6, 35, 20, 0.34); height=200 colspan="3" rowspan="2" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;"><div align="center"><span class="style4">

        <marquee direction="up" behavior="scroll" truespeed="truespeed">
        <p align="center" class="style2"><span class="style4"><font color="black" fontsize="400">Welcome To <br>
Bill officer Page !</font></span> </p>
	 <p><img src="Image/coin.jpg" width="194" height="273"></p>
	</marquee></p></td> 
  </tr>
  <tr bgcolor="black">
  </tr>
  <tr bgcolor="#f5f5dc">
   <!-- <td height="222" background="image/sc3.jpg"></td>
    <td background="image/sc3.jpg"><p>&nbsp;</p></td>-->
  </tr>
    <td  height='77'  colspan='10'>
      <p align="center" class="style6"><span class="style4">
        <span class="style7">
      Copy right © 2019Customer Service Management System
    </span>
  <a href="#top"> Bottom to Top </a>  </tr>
</table>
<TR bgcolor="#f5f5dc">

  <TD >
</TR>
</p>
</HTML>
