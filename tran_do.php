<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<html>
<head>
<title>Transactions...</title>
<?php       
include('connection/connection.php');	//Connect mysql database 
$con=new mysqli($hostname,$username,$password,$db);
if($con->connect_error)
{
die("failed").$con->connect_error;
}     
$today= date("Y-m-d H:i:s"); //get todays date	  
//$result ="";
$acc="select acc_num from customer";	
$a=$con->query($acc);   
if(isset($_POST['Submit'])) ///forsubmit data           
{		     
$tid=$_POST['tranid'];	 
$trantype=$_POST['trantype'];
$tranmethod=$_POST['tranmethod'];
$date=date("Y-m-d");			 
$acc_num=$_POST['acc_num'];			 
$amount=$_POST['amount'];			 
$remarks=$_POST['remarks'];			 			 			

if(!preg_match ("/^[0-9]+$/i", stripslashes(trim($amount))))  //Accept Numeric only
{ 
echo "Enter Valid Data for Amount!";exit(0);					  			           
}
			    			 				 			
else 
{
$forward=true;
if($trantype=="Withdrawal")
{ 
$valid="select balance from customer where acc_num=$acc_num";
$b=$con->query($valid); 
while($res = mysqli_fetch_array($b, MYSQL_BOTH))
{
if($amount>$res[0])
{
echo "<script>JavaScript: alert('Amount insufficient!')</script>";
$forward=false;
}
else
{
$forward=true;
$updateamount=$res[0]-$amount;
}
}
}
else
{
$cid="select custid from customer where acc_num=$acc_num";
$c=$con->query($cid); 
while($result = mysqli_fetch_array($c, MYSQL_BOTH))
{
$customerid=$result[0];
}
$custid=$customerid;
$v="select balance from customer where acc_num=$acc_num";
$d=$con->query($v); 
while($res = mysqli_fetch_array($d, MYSQL_BOTH))
{
$updateamount=$amount+$res[0];
$interest=($updateamount*0.05);
$total_balance=$updateamount+$interest;
$r= "Insert into transactions values('".$tid."','".$trantype."','".$tranmethod."','".$date."','".$acc_num."','".$amount."','".$total_balance."','".$remarks."','".$custid."')";
$e=$con->query($r); 
$up="update customer set balance=$total_balance where acc_num=$acc_num";
$f=$con->query($up); 
$in="update interest set old_bal=$updateamount ,interest=$interest , tot_bal=$total_balance where acc_num=$acc_num";
$g=$con->query($in); 
//$db_close=mysql_close();
$con->close();
}
if ($r)			    
{
$dmode='$_GET[mode]';
echo "<script>JavaScript: alert('Transaction completed successfully')</script>".header('location:tran.php?mode=$dmode');
//echo "<p>Click <a href='tran.php?mode=$dmode'> here </a> for another transaction";exit(0);				 
}			 
else			  
{			      
echo "Transaction failure";
echo "<p>Click <a href='tran_do.php?mode=$dmode'> here </a> to go back";			  
} 
//exit(0);
}
if($forward==true)
{
$cuid="select custid from customer where acc_num=$acc_num";
$h=$con->query($cuid); 
while($result = mysqli_fetch_array($h, MYSQL_BOTH))
{
$customerid=$result[0];
}
$custid=$customerid;
$interest=($updateamount*0.03);
$total_balance=$updateamount+$interest;
$result="update customer set balance=$total_balance where acc_num=$acc_num";
$i=$con->query($result); 
$upin="update interest set old_bal=$updateamount,interest=$interest , tot_bal=$total_balance where acc_num=$acc_num";
$j=$con->query($upin); 
$resu ="Insert into transactions values('".$tid."','".$trantype."','".$tranmethod."','".$date."','".$acc_num."','".$amount."','".$total_balance."','".$remarks."','".$custid."')";
//$k=$con->query($resu);
//$db_close=mysql_close();			 
if ($resu)			    
{
$dmode=$_GET['mode'];				  
echo "<script>JavaScript: alert('Transaction completed successfully')</script>".header('location:tran.php?mode=$dmode');

echo "<p>Click <a href='tran.php?mode=$dmode'> here </a> for another transaction";
exit(0);				 
}			 
else			  
{			      
echo "Transaction failure";
echo "<p>Click <a href='tran_do.php?mode=$dmode'> here </a> to go back";			  
} 									  
}	 //  		   		     
}
}

	 
?>


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
width :10%;   
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


.button2 {

	background-color:#03C;
	
	-moz-border-radius:18px;
	-moz-border-radius:0px;
	
	-webkit-border-radius:18px;
	-webkit-border-radius:0px;
	border-radius:18px;
	border-radius:0px;
	border:1px solid #06F;
	display:block;
	cursor:pointer;
	color: #FFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	padding:4px;
	text-decoration: none;
	text-shadow:1px 1px 1px #CF3;
	border-spacing:inherit;
}
.button2:hover {
	background-color:#0CC;
}
.button2:active {
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
Form1.trantype.focus();	   return (false);
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
if (Form1.acc_num.value == "Select"  )    
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

<strong><font color="#CC0000" size=3>T R A N S A C T I O N &nbsp;  PROCESS</font></strong><br>
<br>
</td></tr>
<tr>
 <td width="180" valign="top">
 <table width="180">
 <tr>
 <td width="180">
<a href="admin_data.php" class="button2">Manager Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
  </td>
  </tr>
    <tr>
 <td width="180">
<a href="logout.php" class="button2"> Log Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </td>
  </tr>
  </table>
  </td>
  <td width="500px" valign="top">
     
<DIV align=right>                       
<form name="Form1" method="post" action="tran_do.php" onsubmit="return Blank_TextField_Validator()">          
      
<table width="426" border="0" align="center">            
<tr>              
<td width="420"><div align="center"> 
<font face="Verdana, Arial, Helvetica, sans-serif" ><font color="#0000FF"><b></b></font></font></div>
</td>            
</tr>          
</table>                 

<TABLE width="65%" height="30%" border=3 align=center cellPadding=3 cellSpacing=0 class=rt id="rt">            
<TBODY>              
<TR>                <TD class=sectionhead align=middle colSpan=2><div align="center">Transaction Process</div>
</TD>              
</TR>
              <TR>                
<TD class=firstalt align=middle width="41%"><div align="left" class="style1">Transaction Number :</div>
</TD>
<?php
$tran="select max(tranid) from transactions";
$x=$con->query($tran);
while($tid = mysqli_fetch_array($x, MYSQL_BOTH))
{
if($tid[0] == null)
{
$tmax="900000";
}
else
{
$tmax=$tid[0]+1;
}
}
//print "<td class=firstalt><b><font size=4>";
//print $tmax;
echo"<TD width=\"59%\" align=left class=firstalt><input"; 
echo" name=\"tranid\" type=\"text\" tabindex=\"1\" "; 
echo" value=$tmax";
//print $tmax;
echo" maxlength=\"100\" size=\"10\" tabindex=\"1\" readonly=\"readonly\">";
echo"</font></b></TD></TR>";
?>              
<TR>                
<TD class=secondalt align=middle><div align="left" class="style2"><B>Transaction Type:</B><BR>                </div>
</TD>                
<TD class=secondalt align=left>
<select name="trantype" tabindex="2" AUTOCOMPLETE="ON" tabindex="2" >
<option value="Select">Select</option>
<option>Deposit</option>
<option>Withdrawal</option>
</select>
</TD>              
</TR>  

<TR>                
<TD class=firstalt align=middle width="41%"><div align="left" class="style1">Transaction Method :</div>
</TD>       
         
<TD width="59%" align=left class=firstalt>
<select name="tranmethod"   tabindex="3" onclick='onindexchange()' >
<option value="Select">Select</option>
<option value="Cash">Cash</option>
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
<TD class=secondalt align=left><select name="acc_num" AUTOCOMPLETE="ON" tabindex="6" >
<option value="Select">Select</option>
<?php 
while($accnum = mysqli_fetch_array($a, MYSQL_BOTH))
{
echo"<option>$accnum[0]</option>";
}
echo"</select>";?>
</TD>              
</TR>              
<TR>
<TD class=firstalt align=middle><div align="left" class="style2"><B>Amount :</B></div>
</TD>
<TD align=left class=firstalt><input name="amount" type="text" maxlength="20" size="20" tabindex="7">                
</TD>              
</TR>
<TR>
<TD class=secondalt align=middle width="41%"><div align="left" class="style1">Remarks :</div>
</TD>
<TD width="59%" align=left class=secondalt><input name="remarks" type="text"  id="acc_number" maxlength="20" size="20" tabindex="8">
</td>
</tr>            
</TBODY>          
</TABLE>
<div align="center">            
<p><input name="Submit" type="submit" class="admin_add_items" value="Transact" onclick=onindexchange()>             
<input name="Submit2" type="button" class="admin_add_items" id="Submit2" onclick="location.replace('./tran.php')" value="Cancel" ></div> </p>
</form>           </DIV>

</TD>    
  </td></tr></table>
</TR>  </TBODY>
</TABLE>
<div id="footer">
<br>
<p align="center">&nbsp;</p>
</div>
</body>
</html>
