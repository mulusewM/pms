
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript" src="js/image_slide.js"></script>
<script language="javascript">

function load() {
var load = window.open ('birk/index.php','_self',false);

}
function loadEng() {
var load = window.open ('index.php','_self',false);

}
// -->
</script>
<script type="text/javascript">
<!--
tday =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday = d.getDay();
nmonth = d.getMonth();
ndate = d.getDate();
nyear = d.getYear();
nhour = d.getHours();
nmin = d.getMinutes();
nsec = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

if(nhour == 0) {ap = " AM";nhour = 12;}
else if(nhour <= 11) {ap = " AM";}
else if(nhour == 12) {ap = " PM";}
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>




</head>
<body>
<div id ="background">
<div id="wrapper">
<table width="1020px" height="42px" border="1" background-color="#282828">
<tr width="1020"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">
<font color="white" face="times new roman">burie town saving and credit System.&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img style ="marigin_bottom :1px;margin-right:0px;"align="center;"src="image1/s1.jpg";></font>
</td></tr></table>

<div id="banner">
<ul id="logo">
<center>
<li><a href="home1.php">home</a></li>
<li><a href="contact us.php">contact us</a></li>
<li><a href="about.php">about</a></li>
<li><a href="feedback.php">feedback</a></li>
<li><a href="login.php">login</a></li>
</center>
</ul>
</div>
 
	
	  <span class="style1"> Language </span> 
	  
	    <select name="language" size="1" >
		<option value="eng" onClick="loadEng()">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>		     
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>

<?php       
include('connection/connection.php');	//Connect mysql database 
$con=new mysqli($hostname,$username,$password,$db); 
$dates=getdate();
$curdate= $dates['year']."-".$dates['mon']."-".$dates['mday'];////print $curdate;
if(isset($_POST['Submit'])) ///forsubmit data           
{
$curdate=$_POST['date'];
}       

$result ="Select * from transactions where date = \"$curdate\"";
$a=$con->query($result);
?>


</head>
<body>       

<TABLE width="1100px" border=0 align="center" cellpadding="4" cellspacing="4">
            
             <table align="center" width="1100px">
              
		<td width="100%" bgcolor="#000000">
               <div class="header">
           
</div>
<div class="wrapper">
            
            </table>

<table width="1100px" height="500" border="0" align="center" bgcolor="">
 <tr><td width="210"  bgcolor="">

<strong><font color="#CC0000" size=3>T R A N S A C T I O N &nbsp;  PROCESS</font></strong><br>
<br>
</td></tr>
<tr>
 <td width="180" valign="top">

  </td>
  <td width="500px" valign="top">
 
<div align="center">


<b> </b>
<FONT face="Verdana, Arial, Helvetica, sans-serif" color="#000000">
<STRONG>
<B>
Perform Transaction
</B>
</STRONG>
</font>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff">
</a>    
     
<DIV align=left>                       
<form name="Form1" method="post" action="tran.php">          
                    
</p>          
</div>       
<DIV align="center">                
<p>&nbsp;</p>       
<div align="center">                 
<table width="65%" border="0" cellpadding="2" cellspacing="1" class="man_auth" >           
<tr>             
<th width="50"><span class="style6">Transaction Id </span></th>             
<th width="60"><span class="style6">Transaction Type</span></th>             
<th width="60"><span class="style6">Transaction Method </span></th>             
<th width="10"><span class="style6">Date </span></th> 
<th width="50"><span class="style6">Account Number </span></th> 
<th width="50"><span class="style6">Amount </span></th> 
<th width="50"><span class="style6">Total Balance </span></th> 
<th width="50"><span class="style6">userid </span></th>           
</tr>           

<tr>


<?php 	
$today=date("Y-m-d");
while($row = mysqli_fetch_array($a, MYSQL_BOTH)){?></a></div>
</td>             
<td>
<div align="left">             
<?php 
echo $row[0];
?>
</a></div></td> 
            
<td><div align="left">
<?php 
echo $row[1];
?>
</div>
</td> 
            
<td>
<?php 
echo $row[2];
?>
</a>
</div>
</td> 
            
<td>
<div align="left">
<?php 
echo $today;
?>
</a>
</div>
</td>             
<td>
<div align="left">
<?php 
echo $row[4];
?></a>
</div>
</td>             
<td>
<div align="left">
<?php 
echo $row[5];
?>
</a>
</div>
</td>             
<td>
<div align="left">
<?php 
echo $row[6];
?></a></div></td>
<td><div align="left">
<?php 
echo $row[7];
?></td> 
          
</tr>           
<?php 
}
?>         
</table>         
<p><FORM>
<p align="center">
<INPUT TYPE="button" value="Print Transaction Details" onClick="window.print()" style="font-weight: bold">
</p>
</FORM></p>         
<p>&nbsp;</p>        <p>          
         
<input name="Submit2" type="button" class="admin_add_items" id="Submit2" onClick="location.replace('./login.php')" value="Cancel" ></div> </p>      
</DIV>
<tr>
<td align="center">
 <p align="center">
  <a href="tranmenu1.php">
<img border="0" alt="Go Back!" src="image1/prev.png" width="57" height="50">
</td></tr>
</a>
</p>    
       </TD> 
  </td></tr></table>

  </TR>  
</TBODY>
</TABLE>
	<footer class="footer">
<p>all rights are reserved</p>
</footer>
<table width="1020px" height="42px" border="1" background-color="#282828">
<tr width="1020"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="white" face="times new roman">all rights are reserved burie town saving and credit System.</font>
</td></tr></table>
</body>
</html>
