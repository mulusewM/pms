<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<html>
<head>
<title>Transactions...</title>
<?php       
include('Connections/con44.php');	//Connect mysql database 
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("water44", $conn);	   
if(isset($_POST['Submit'])) ///forsubmit data           
{
//$tid="select id from bankaccount where id =$id";
//$c=$con44->query($tid);	
//$tid=$_POST['id'];	 
$trantype=ucwords($_POST['trantype']);
$tranmethod=ucwords($_POST['tranmethod']);
$date=date("Y-m-d");			 
//$accountnumber=($_POST['accountnumber']);			 
$amount=ucwords($_POST['amount']);			 		 			 			
if(!preg_match ("/^[0-9]+$/i", stripslashes(trim($amount))))  //Accept Numeric only
{ 
echo "Enter Valid Data for Amount!";
exit(0);					  			           
}			    			 				 			
else 
{
$forward=true;
if($trantype=="Withdrawal")
{ 
$valid="select balance from bankaccount where customer_id=$customer_id";
 $b=$con44->query($valid);
while($res = mysql_query($b))
	if($res = mysql_query($b))
{
if($amount<=$res[0])
{
$updateamount=$res[0]-$amount;
$forward=true;
}
else
{
echo "<script>JavaScript: alert('Amount insufficient!')</script>";
$forward=false;
}
}
}
else
{
$cid="select id from bankaccount where customer_id=$customer_id";
$c=$con44->query($cid);
while($result =mysql_query($c))
	if($result =mysql_query($c))
{
$customerid=$result[0];
}
$custid=$customerid;

$cid1="select balance from bankaccount where accountnumber=$accountnumber";
$n=$con->query($cid1);
while($result1= mysql_query($n, MYSQL_BOTH))
{
$id=$result1[0];
}
$id=$id;

$val="select balance from bankaccount where accountnumber=$accountnumber";
$d=$con->query($val);
if ($e)			    
{
$dmode='$_GET[mode]';
echo "<script>JavaScript: alert('Transaction completed successfully')</script>".header('location:tran.php?mode=$dmode');
echo "<p>Click <a href='tran.php?mode=$dmode'> here </a> for another transaction";				 
}			 
else			  
{			      
echo "Transaction failure";
echo "<p>Click <a href='tran_do.php?mode=$dmode'> here </a> to go back";			  
} 
exit(0);
}
			 
if ($n)			    
{
$dmode=$_GET['mode'];				  
echo "<script>JavaScript: alert('Transaction completed successfully')</script>".header('location:tran.php?mode=$dmode');

echo "<p>Click <a href='tran.php?mode=$dmode'> here </a> for another transaction";
//exit(0);				 
}			 
else			  
{			      
echo "Transaction failure";
echo "<p>Click <a href='tran_do.php?mode=$dmode'> here </a> to go back";			  
} 									  
}	 	   		     
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="acss.css">

<style type="text/css">
body {
     background-color:#D8BFD8;
    
    font-family:verdana;
}

.firstalt 
{
BORDER-RIGHT: #808a98 1px solid; 
BORDER-TOP: #e5e5e5 1px solid;  
BORDER-LEFT: #e5e5e5 1px solid;
 COLOR: #000000; 
BORDER-BOTTOM: #808a98 1px solid; BACKGROUND-COLOR: #e7ebef
}
.secondalt 
{
BORDER-RIGHT: #808a98 1px solid; 
BORDER-TOP: #e5e5e5 1px solid; 
BORDER-LEFT: #e5e5e5 1px solid; 
COLOR: #000000; 
BORDER-BOTTOM: #808a98 1px solid; 
BACKGROUND-COLOR: #d6dbde
}
.sectionhead 
{
BORDER-RIGHT: #808a98 1px solid; 
BORDER-TOP: #efefef 1px solid; 
FONT-WEIGHT: bold;  
BORDER-LEFT: #e5e5e5 1px solid;
COLOR: #ffffff; 
BORDER-BOTTOM: #efefef 1px solid; 
BACKGROUND-COLOR: #858fbf
}

.tblhead 
{
BORDER-RIGHT: #808a98 1px solid; 
BORDER-TOP: #e5e5e5 1px solid; 
FONT-WEIGHT: bold; 
BORDER-LEFT: #e5e5e5 1px solid; 
COLOR: #151535; 
BORDER-BOTTOM: #808a98 1px solid; LETTER-SPACING: -1px
}	
input.admin_add_items
{  
color:#000;   
font-family:'trebuchet ms',helvetica,sans-serif;   
font-size:84%;   font-weight:bolder;   
background-color:#fed;    
width :80px;   
height:25px;
border:1px solid;   
border-top-color:#7699Cc;   
border-left-color:#7699Cc; border-right-color:#7699Cd;   
border-bottom-color:#7699Cc;   
filter:progid:DXImageTransform.Microsoft.Gradient (GradientType=0,StartColorStr='#ffffffff',EndColorStr='#7699Cc'); 
}		
.style1 
{	
font-family: "Courier New", Courier, mono;	font-weight: bold;
}
.style2 
{
font-family: "Courier New", Courier, mono
}

.button1 {
	background-color:#2dabf9;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #0b0e07;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: "Wide Latin";
	font-size: 16px;
	padding:4px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;
}
.button1:hover {
	background-color:#fa08a5;
}
.button1:active {
	position:relative;
	top:1px;
}

#header {
    width: 1100px;
    height: 110px;
    margin: 0 auto;
    background-image: url(images/header.jpg)
}


#footer {
    width: 1100px;
    height: 60px;
    margin: 0 auto;
    background-image: url(images/footer.png)
}

.button1:active {
	position:relative;
	top:1px;
}


body {
	
	
	background:url(http://img6.uploadhouse.com/fileuploads/17737/17737075bdad5cfa9423bb2c3c2beee695c72bb8.jpg)
 
      font-family: Tahoma,Arial,Helvetica,sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: normal;
    font-size-adjust: none;
    font-stretch: normal;
    color: #000000;
}

</style>
</head>
<script language="JavaScript">

function Blank_TextField_Validator()
{
if(Form1.tranmethod.options[Form1.tranmethod.selectedIndex].text=="Cheque")
{
if (Form1.chequenum.value == ""  )    
{  
alert("Cannot empty Chaeque Number!.");       
Form1.chequenum.focus();	   return (false);
} 
}

if(Form1.trantype.options[Form1.trantype.selectedIndex].text=="Select")
{
if (Form1.trantype.value == "Select"  )    
{  
alert("Please select the Trasaction Type...");       
Form1.trantype.focus();	   
return (false);
} 
}

if(Form1.tranmethod.options[Form1.tranmethod.selectedIndex].text=="Select")
{
if (Form1.tranmethod.value == "Select"  )    
{  
alert("Please select the Trasaction Method...");       
Form1.tranmethod.focus();	   return (false);
} 
}

if(Form1.acc_num.options[Form1.acc_num.selectedIndex].text=="Select")
{
if (Form1.acc_num.value == " "  )    
{  
alert("Please select the account number...");       
Form1.acc_num.focus();	   return (false);
} 
}
}
function onindexchange()
{
if(Form1.tranmethod.options[Form1.tranmethod.selectedIndex].text=="Cheque")
{
Form1.chequenum.disabled=false;
var iChars = "~!@#$%^&*()+=-[]\\\';,./{}|\":<>?";        
for (var i = 0; i < document.Form1.chequenum.value.length; i++) 
{                
if (iChars.indexOf(document.Form1.chequenum.value.charAt(i)) != -1) 
{                
alert("Cheque Number Type has special characters. \nThese are not allowed.\n");                
return false;        
}
}
}
else
{
Form1.chequenum.disabled=true;
}
}

</script>
<body>
<TABLE width="1100px" border=0 align="center" cellpadding="4" cellspacing="4">
            
             <table align="center" width="1100px">
              
		<td width="100%" bgcolor="#000000">

        <div class="header">
           
</div>
<div class="wrapper">
            
<div class="split">
   <div id="Menu">
<nav class="menu">
</div></div>
<style>
div.split {
  box-sizing:content-box;
  width:100%;
 
  top:5px;
  float:left;
  background-color:#333;
}

.menu ul {
   margin: 1em;
	margin-left:5px;
    margin-top:-0px;
    padding-bottom:20px;
    margin-left:20px;
	width:auto;
	font-weight:bold;
	
}
.menu1 {
    width:auto;
 margin:0 ;
 padding-top:0px;
}
 
 
.menu {
    width:80;
 top- margin:10px ;
 padding-top:0px;
}
 
.menu li {
	list-style-type:none inside;
	margin: 3px; padding: 0;
    list-style-image: none;
	background:#9CF;
	font-weight:bold;
    font-family:"Arial Black", Gadget, sans-serif;
}
 
.menu a {
	transition:all linear 0.15s;
    text-decoration:none;
	font-weight:bold;
    color:#919191;
	
}
/*----- Top Level -----*/
.menu > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:12px;
	
}
 
.menu > ul > li > a {
	
    padding:10px 41.099px;
    display:block;
    text-shadow:0px 1px 0px rgba(0,0,0,0.4);
	color:#03F;
	background:#0CC;
	 border:6px solid #0CF ;
	 
}
 
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#FFF;
}
 
/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:2;
    opacity:1;
	
}
 
.sub-menu {
    width:80%;
    padding:0px 0px;
    position:absolute;
    top:100%;
    left:-20px;
    z-index:-2;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#2e2728;
}
 
.sub-menu li {
    display:block;
    font-size:14px;
}
 
.sub-menu li a {
    padding:10px 25px;
    display:block;
}
 
.sub-menu li a:hover, .sub-menu .current-item a {
    background:#03C;
}
</style>
</table>



<table width="1100px" height="500" border="0" align="center" bgcolor="#CCCCFF">
 <tr><td width="110"  bgcolor="">
  <td width="500px" valign="top">
     
<DIV align=right>                       
<form name="Form1" method="post" action="tran_do_teller.php" onsubmit="return Blank_TextField_Validator()">          
      
<table width="426" border="0" align="center">            
<tr>              
<td width="420"><div align="center"> 
<font face="Verdana, Arial, Helvetica, sans-serif" ><font color="#0000FF"><b></b></font></font></div>
</td>            
</tr>          
</table>                 

<TABLE width="65%" height="30%" border=3 align=center cellPadding=3 cellSpacing=0 class=rt id="rt">            
<TBODY>              
<TR>                <TD class=sectionhead align=middle colSpan=2><div align="center">payment Process</div>
</TD>              
</TR>         
<TR>                
<TD class=secondalt align=middle><div align="left" class="style2"><B>select Type:</B><BR>                </div>
</TD>                
<TD class=secondalt align=left>
<select name="trantype" tabindex="2" AUTOCOMPLETE="ON" tabindex="2" >
<option value="Select">Select</option>
<option>Deposit</option>
<option>Withdrawal</option>
<div align="left" class="style1">Withdrawal:</div
</TD>              
</TR>  

<TR>                
<TD class=firstalt align=middle width="41%"><div align="left" class="style1">select Method :</div>
</TD>       
         
<TD width="59%" align=left class=firstalt>
<select name="tranmethod"   tabindex="3" onclick='onindexchange()' >
<option value="Select">Select</option>
<option value="Cash">Cash</option>
<option value="saving">current</option>
</select>    
     </TD>              
</TR>

<TR>                
<TD class=secondalt align=middle><div align="left" class="style2"><B>Date(y-m-d)</B><BR>                </div>
</TD>                
<TD class=secondalt align=left>

<font size=4>
<?php
$date=date("Y-m-d");
echo $date; 
?>
</font>


</TD>              
</TR>  
<TR>                
<TD class=secondalt align=middle><div align="left" class="style2"><B>Account Number :</B><BR>                </div>
</TD>                
<TD class=secondalt align=left><input name="acc_num" type="text" maxlength="20" size="20" tabindex="7">
</TD>              
</TR>              
<TR>
<TD class=firstalt align=middle><div align="left" class="style2"><B>Amount :</B></div>
</TD>
<TD align=left class=firstalt><input name="amount" type="text" maxlength="20" size="20" tabindex="7">                
</TD>              
</TR>
<TR>
<!--<TD class=secondalt align=middle width="41%"><div align="left" class="style1">Remarks :</div>-->
</TD>
<TD width="59%" align=left class=secondalt><input name="remarks" type="text"  id="acc_number" maxlength="20" size="20" tabindex="8">
</td>
</tr>            
</TBODY>          
</TABLE>
<div align="center">            <p>              
<input name="Submit" type="submit" class="admin_add_items" value="Transact" onclick=onindexchange()>        
       
<input name="Submit2" type="button" class="admin_add_items" id="Submit2" onclick="location.replace('./tran.php')" value="Cancel" ></div> </p>
</form>           </DIV>
</TD>    
  </td></tr></table>
</TR>  </TBODY>
</TABLE>

<div id="templatemo_footer">    
    	<!--<div class="bottom_addr">&copy; 2019 Amhara Saving and Credit Institution Burie Branch All Rights Reserved</div>
	</div> <!-- end of footer -->
</body>
</html>
