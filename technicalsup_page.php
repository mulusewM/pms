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
<TITLE>Technician page</TITLE>

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
width:223px;
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
	color: red;
	font-weight: bold;
}
</style>
</style> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>

<BODY  bgcolor="E9FFFA">
<table align="center" width="1047"  cellpadding="0" cellspacing="0" style=" background-color:E9FFFA;
box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:950px;height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px #99ccff;">
  <tr   bgcolor="E9FFFA">
    <td  height='0'  colspan='9'></td>
  </tr>
  
  <tr>
    <img src="Image/Capture1.jpg" width="1100" height="150" border="3"
  </tr>
  </td>   
  <td bgcolor="E9FFFA"  width='241'height='37'align='center' ><div align="right"><a href='technicalsup_page.php'><strong><font color="black">Home</font></strong></a></div></td>
    
 <td bgcolor="E9FFFA"width='83'height='37'align='center' ><div align="center"><strong><a href='users.php' target="myframe"><font color="black">Users</font></a></strong></div></td>
   <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='info.php' target="myframe"><font color="black">About us</font></a></strong></div></td>
	  <td bgcolor="E9FFFA"width='125'height='37'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="black">Contact us</font></a></strong></div></td>
	  <td bgcolor="E9FFFA"width='190'height='40'align='center' ><div align="center"><strong><a href="form1/Logout.php"><font color="black">Logout</font></a></strong></div></td>
	</div></td>

	   	 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:brown;">
      <div id="adHeader">
       <!-- <h3 style="bgcolor:#000066">Technician  Module</h3> -->
        <p><strong><center><font size="+4"></font></center></strong><br />
  </p>
</div>
	 <div id="leftsidebar">
<ul id="nav">
<li><a href=""><span class="black"><font color="Black">Technician can :- </font></span></a>
	<li> <a href="form1/old_custome_ order_maintenance form.php" target="myframe" title="Report Your Task Performed"><span class="style10"><font color="white">Recordmaintanorder</font></a></li>
	   <li> <a  href="form1/viewoldcustomerorder.php" target="myframe" title="Recieve Old Customer Maintenance Order"><span class="style10"><font color="white">viewOld Custrequest</font></a></li>
	<li> <a href="form1/Recordnewlineconnectionbytechnicalform.php" target="myframe" title="Record New Line Connection Report"><span class="style10"><font color="white"><strong>RecordNewLineConnect</strong></font></a></li>
	<li> <a href="form1/viewnewlineconectionorder.php" target="myframe" title="Recieve New Line Connection Order"><font color="white">view NewLineConnectrequest </font></a></li>

 <li> <a href="form1/ViewRegisteredReportbytechnichian.php" target="myframe" title="View Task Registered To Update"><span class="style10"><font color="white"></font></span></a></li>
               </li>
              </p></td>
    <td  background="../image/gold.jpg"colspan="5" rowspan="3" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><center>
   <p> 
  <span class="style1"><font size="+3"><span class="style9"> Welcome To Technician Page</span> </span></center>
   <p align="center">
     <iframe  src="tech_task.php"name="myframe" frameborder="2"  width="800" marginwidth="" height="590" align="center" marginheight="" scrolling="auto" ></iframe>
     <marquee></marquee></td>
    <td width="194"height=200 colspan="3" rowspan="2" style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;"><div align="center"><span class="style4">
      
        <marquee direction="up" behavior="scroll" truespeed="truespeed">
        <p align="center" class="style2"><span class="style4"><font fontsize="400">Welcome To <br>
 Technician Page !</font></span> </p>
	 <p><img src="Image/1.jpg" width="194" height="173"></p>
	</marquee></p></td> 
  </tr>
  <tr bgcolor="#f5f5dc">
    <td background-color: rgba(6, 35, 20, 0.34); height='350'>

   <p align="center">
     <lift>
      <!-- <embed src="http://www.satisfaction.com/clock-generator/clock.swf" width="156" height="126" align="middle" style="width: 200px;
	   height: 170px"flashvars="s=128&h=1&u=http://www.satisfaction.com/clock-generator&i=9&b=0x00CCCC" 
	   quality="high" wmode="transparent" name="Custom Clock" allowscriptaccess="samedomain" type="application/x-shockwave-flash" 
	   pluginspage="http://www.macromedia.com/go/getflashplayer" />       
       </embed><br>-->
     </lift>
   </p></td>
  </tr>
  <tr bgcolor="#f5f5dc">
    <!--<td height="165" background="image/sc3.jpg"></td>
    <td background="image/sc3.jpg"><p>&nbsp;</p>--></td>
  </tr>
  <tr background="image/ee.jpg">
    <td  height='79'  colspan='10'><span class="style4">
      <div align="center" class="style11">Copy right © 2019 Customer Service Management System</div>
        <span class="style7">
        <div align="center"><a href="#top">Bottom to Top </a></div></span> 
		</tr>
</table>
<TR bgcolor="#f5f5dc">

  <TD >
</TR>
</p>
</HTML>

<?