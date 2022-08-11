<?php
include('db1.php');
session_start();
if (!isset($_SESSION['id'])){
header('location:../home_page.php');
}
?>
<html><title>Untitled Document</title>
<style type="text/css">
body {
	background-color:
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	line-height: 20px;
	color: #336699;

}</style>
</head>
<body>
<table width="635" height="254"  style="text-shadow:0px 0px 1px black;" >
  <tr><td width="20" height="248" bgcolor="" style="font-style:;"><h4><font color="black">
</font></h4></td>
    <td width="603" bgcolor=""><p><font color="#000000">This page is allows only Meter Reader hence she/he can Record Consumtion of Water and Send to bill officer.
				   <br>
				  </font>
    </td>
</tr></table>

</body>
</html>
