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
<TITLE>Manager page</TITLE>

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
width:225px;
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
width:200px;
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
.style4 {color: #6600FF; font-weight: bold; }
.style7 {color: red}
.style9 {color: #9900FF}
.style10 {color: #6600FF}
.style11 {
	color: #990000;
	font-weight: bold;
}
</style>

</style> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<BODY 	background-color: rgba(6, 35, 20, 0.34);>
<table align="center" width="1046"  cellpadding="0" cellspacing="0" style bgcolor="E9FFFA"  box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:950px;height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px #99ccff;">
  <tr   bgcolor="#003333">
    <td  height='0'  colspan='9'></td>
  </tr>
  
  <tr>

    <img src="Image/Capture1.jpg" width="1100" height="170" border="3"
  </tr>
  </td>   
  <td bgcolor="E9FFFA"  width='200'height='37'align='center' ><div align="right"><a href="manager_page.php"><strong><font color="black">Home</font></strong></a></div></td>
    
 <td bgcolor="E9FFFA"width='94'height='37'align='center' ><div align="center"><strong><a href='users.php' target="myframe"><font color="black">users</font></a></strong></div></td>
  <td bgcolor="E9FFFA"width='133'height='37'align='center' ><div align="center"><strong><a href='info.php' target="myframe"><font color="black">About us</font></a></strong></div></td>
	  <td bgcolor="E9FFFA"width='142'height='37'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="black">Contact us</font></a></strong></div></td>
	    <td bgcolor="E9FFFA" width='190'height='40'align='center' ><div align="center"><strong><a href="form1/Logout.php"><font color="black">Logout</font></a></strong></div></td>
	</div></td>
	   	     	 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td height='200'  style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:brown;">
      <div id="adHeader">
       <!-- <h3 style="bgcolor:#000066">Manager   Module</h3> -->
        <p><strong><center><font size="+4"></font></center></strong><br />
  </p>                        
</div>
	 <div id="leftsidebar">
<ul id="nav">
  
<li><a href=""><span class="black"><font color="white"><b>Managercan view:- </b></font></span></a>
             <!-- <ul>-->
			    <li> <a href="form1/managerviewnewlineconectionorder.php"target="myframe" title="View Report of New Line Connection Order"><span class="style10"><font color="white><strong>New Line Connection Order</strong></font></span></a></li>
				  <li> <a href="form1/managerviewOldCustomerMaintenanceOrderRequest.php" target="myframe" title="View Old Customer Maintenance Order Request"><span class="style10"><font color="#003399"><strong>OldCustMainteOrder</strong></font></span></a></li>
<li> <a href="form1/managerViewRegisteredReportbytechnichian.php"target="myframe" title="View Report of Task Performed By Technician"><span class="style10"><font color="#003399"><strong>TaskPerformByTechn</strong></font></span></a></li>
<li> <a href="form1/managerviewoldcustomerorder.php"target="myframe" title="View Report of Technician Feedback For Customer"><span class="style10"><font color="#003399"><strong>TechniFeedbackForCust</strong></font></span></a></li>
				<!-- <li> <a href="form1/managerviewmeterreaderreport.php" target="myframe" title="View Report of Meter Reader"><span class="style10"><font color="#003399"><strong>ViewMeterReaderRepor</strong></font></span></a></li>
                --><li> <a href="form1/managerviewbilloficerreport.php"target="myframe" title="View Report of Water Consuption Payment"><span class="style10"><font color="#003399"><strong>ViewRepWaterConsupPayment</strong></font></span></a></li>
				   
        </ul>
</li>
</p></td>
    <td  background="../image/gold.jpg"colspan="5" rowspan="3" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><center>

   <p> <span class="style1"><font size="+3"><span class="style9"> Welcome To Manager Page</span> </span></center>
   <p align="center">
     <iframe  src="managertasks.php"name="myframe" frameborder="2"  width="650" marginwidth="" height="590" align="center" marginheight="" scrolling="auto" ></iframe>
     <marquee></marquee></td>
    <td width="194"height=200 colspan="3" rowspan="2" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;"><div align="center"><span class="style4">
      
        <marquee direction="up" behavior="scroll" truespeed="truespeed">
        <p align="center" class="style2"><span class="style4"><font fontsize="400">Welcome To <br>
 Manager Page !</font></span> </p>
	 <p><img src="Image/1.jpg" width="194" height="173"></p>
	</marquee></p></td> 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td height="165" ></td>
    <td background="image/sc3.jpg"><p>&nbsp;</p></td>
  </tr>
  <tr background="image/ee.jpg">
    <td  height='79'  colspan='10'><span class="style4">
      <div align="center" class="style11">        Copy right © 2019 Customer Service Management System</div>
        <span class="style7">
        <div align="center"><a href="#top">Bottom to Top </a></div></span>  </tr>
</table>
<TR bgcolor="#f5f5dc">

  <TD >
</TR>
</p>
</HTML>

<?