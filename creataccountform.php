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
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
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

<table width="600" height="350"  style="text-shadow:0px 0px 1px black;box-shadow:rgba(0,0,0,0.3) 0px 0px 1px;" >
  <tr>
    <td bgcolor="" style="font-style:italic;"><span class="style1">Create Account Role    </span>&nbsp;
      <select id="mySelect" onChange="if(this.options[this.selectedIndex].value != ''){frame.location.href=this.options[this.selectedIndex].value}">
       <option value="crateaccount.php">Adiministrator</option>
	   <option value="creataccountforbillofficer.php">Bill officer</option>
        <option value="creataccountfortechnicalsupervisor.php">Technical </option>
        <option value="creataccountformanager.php">Manager</option>
  <!--<option value="creataccountforcustomerexpert.php">Customer</option>
		  <!--<option value="createaccountpageformeterreader.php">Meter Reader</option>-->
		
        </select>
      <iframe src="crateaccount.php"name="frame" frameborder="0"  width="700" marginwidth="" height="500" align="center" marginheight="" scrolling="auto"></iframe></td>
  </tr>
</table>

</body>
</html>
