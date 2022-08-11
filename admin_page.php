<?php
include('form1/db1.php');
session_start();
if (!isset($_SESSION['employeeid'])){
header('location:index.php?err');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Customer Service Managenment System</TITLE>

<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<link rel="stylesheet" type="text/css" href="main.css" />
<script type="text/javascript" src="http://ajax.googleapis.com
/ajax/libs/jquery/1.2.6/jquery.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
  $("#leftsidebar li ul").hide();
  $("#leftsidebar li").hover(
function() {
    $(this).children("ul").show();
   },
function() {
    $(this).children("ul").hide();
   });  //hover
 });    // document ready
</script>
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
width:230px;
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
.style2 {font-size: 18px}
.style4 {color: #0000FF; font-weight: bold; }
.style6 {color: green}
.style7 {color: red}
.style8 {color: green}
</style>
<script type="text/javascript">
<!--

</script>

</style> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<BODY  bgcolor="#003300" onLoad="MM_preloadImages('Image/77.jpg')">
<table align="center" width="107"  cellpadding="0" cellspacing="0" style bgcolor="E9FFFA"  box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:950px;height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px #99ccff;">
  <tr   bgcolor="#003333">
    <td  height='0'  colspan='0'></td>
  </tr>
  
  <tr>
     <img src="Image/Capture1.jpg" width="1123" height="150" border="3"
  </tr>
  </td>
  <td bgcolor="E9FFFA"  width='209'height='37'align='center' ><div align="right"> <a href='admin_page.php'><strong><font color="black">Home</font></strong></a></div></td>
 <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='users.php' target="myframe"><font color="black">users</font></a></strong></div></td>
   <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='info.php' target="myframe"><font color="black">About Us</font></a></strong></div></td>
    <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="black">Contact Us</font></a></strong></div></td>
	 <!--<td bgcolor="E9FFFA"width='125'height='37'align='left' ><div align="left"><strong><a href="d/insert_documnts.php" target="myframe"><font color="black">Add Help </font></a></strong></div></td>
	--><td bgcolor="E9FFFA"width='125'height='37'align='left' ><div align="left"><strong><a href="form1/Logout.php"><font color="black">Logout</font></a></strong></div></td>
	 </tr>
  <tr bgcolor="#f5f5dc">
    <td  style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:1px;color:black;"><br><br>
      <div id="adHeader">
        <!--<h3 style="bgcolor:#000066">Adminstrator Module</h3> -->
        <p><strong><center><font size="+7"></font></center></strong><br />
  </p>
</div>
	 <div id="leftsidebar">
<ul id="nav">
  
            <li><a href=""><span class="black"><font color="black">Administrator can :-</font></span></a>
             <!-- <ul>-->
			    <li> <a href="creataccountform.php"target="myframe"><span class="style10"><font color="#FCD2FF">Create Account</font></span></a></li>
				<!--<li> <a href="admindeletebilloficceraccount.php"><span class="style10"><font color="white">View :</font></span></a>-->
					<li> <a href=><font color="#FCD2FF">View :</font></a>
				<!--<ul> -->
				<li><a href="form1/adminviewcustomeraccount.php"target="myframe"><span class="style10"><font color="white">Customer Account</font></span></a></li>
				<!-- <li><a href="form1/adminviewmeterreaderaccount.php"target="myframe"><span class="style10"><font color="red">Meter Reader Account</font></span></a></li> -->
				<li><a href="form1/adminviewbillofficeraccont.php"target="myframe"><span class="style10"><font color="white">Bill Officer Account</font></span></a></li>
				<li><a href="form1/adminviewtechnicalaccount.php"target="myframe"><span class="style10"><font color="white">Technician Account</font></span></a></li>
				<li><a href="form1/adminviewmanageraccount.php"target="myframe"><span class="style10"><font color="white">Manager Account</font></span></a></li>
				<!--</ul>-->
				</li>
              <!-- </ul>-->
             </li>
</p></td>

  <td  background="../image/new1.jpg"colspan="5" rowspan="3" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><center>
   <p>
   <span class="style1"><font size="+3"> Welcome To Administrator Page</span></center>
   <p align="center">
     <iframe  src="padmin.php"name="myframe" frameborder="2"  width="900" marginwidth="" height="590" align="center" marginheight="" scrolling="auto" ></iframe>
     <marquee> </marquee></td>

      
      <marquee direction="up" behavior="scroll" truespeed="truespeed">
       <!-- <p align="left" class="style2"><span class="style4"><font color="brown" fontsize="400">Welcome To <br>
Administrator Page !</font></span> </p>-->
	<!-- <p align="left">Administrator page is allwed only Administrator create account and deactivate account and give for the  users!! </p>-->
	</marquee>
        </p></td> 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td bgcolor="white" height='223'><center><center>
    </center>
    <small>
    </center></td>

  
  <tr background="image/ee.jpg">
    <td  height='77'  colspan='10'>
      <p align="center" class="style6"><span class="style4">
        <span class="style7">
      Copy right © 2019 Customer Service Management System
    </span>
  <a href="#top"> Bottom to Top </a>  </tr>
</table>
<tr bgcolor="#f5f5dc">

  </td>
</TR>
</p>
</HTML>