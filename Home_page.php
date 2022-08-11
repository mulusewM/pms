<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: 
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	line-height: 20px;
	color: #336699;
	background-image: url();
	}
#mySelect{
width:150px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
</style>
</head>

<table width="610" height="517"  style="text-shadow:0px 0px 1px black;box-shadow:rgba(0,0,0,0.3) 0px 0px 1px;" class="a" >
  <tr><td width="8" height="179" bgcolor="" style="font-style:italic;"><h4><font color="black">
</font></h4></td>
    <td width="491" bgcolor=""><p><font color="black">
      <center><center><center>
      </center>
      </center>
      </center>
    </font></p>
    </td>
    <td width="138" bgcolor=""><img src="Image/kulf.jpg" width="223" height="177" /></td>
  </tr>
<tr>
  <td height="26" colspan="3" align="left" style=" background-image:url(image/gold.jpg"><font color="#000066"> &nbsp;&nbsp;&nbsp;&nbsp;Login As </font> &nbsp;
    <select id="mySelect" name="select" onChange=" if(this.options[this.selectedIndex].value != ''){frame.location.href=this.options[this.selectedIndex].value}">
  <option value="adminlogin.php">Adiministrator</option>
  <option value="billofficerlogin.php">Bill officer</option>
  <option value="Technicallogin.php">Technician </option>
  <option value="customer_login.php">Customer</option>
  <option value="manager.php">Manager</option>
 <!-- <option  value="MeterRreaderlogin.php">Meter Reader</option>-->
</select></tr>
<tr>
  <td align="center" height="302" colspan="3"><iframe src="adminlogin.php" name="frame" frameborder="0"  width="600" marginwidth="" height="300" align="center" marginheight="" scrolling="auto"></iframe></td>
</tr></table>

</body>
</html>
