<?php require_once('Connections/con44.php'); ?>
<?php
mysql_select_db($database_con44, $con44);
$query_admin = "SELECT * FROM creataccountadmin";
$admin = mysql_query($query_admin, $con44) or die(mysql_error());
$row_admin = mysql_fetch_assoc($admin);
$totalRows_admin = mysql_num_rows($admin);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {font-size: 18px; font-weight: bold; color: #6666CC; }
.style7 {
	color: #9933FF;
	font-weight: bold;
	font-size: 18px;
}
.style9 {font-size: 24px}
.style10 {font-size: 16px}
.style11 {
	font-size: 24px;
	font-weight: bold;
}
.style12 {font-size: 24}
-->
</style>
</head>

<body>
<br />
<form id="form1" name="form1" method="post" action="">
  <table width="1000" border="1">
    <tr>
      <td width="85" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">Record_no</span></td>
      <td width="24" bordercolor="#9900CC" bgcolor="#999999"><span class="style7">Action</span></td>
      <td width="86" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">First_name</span></td>
      <td width="85" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">Last_name</span></td>
      <td width="72" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">Email</span></td>
      <td width="73" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">Password</span></td>
      <td width="90" bordercolor="#9900CC" bgcolor="#999999"><span class="style5">User_name</span></td>
    </tr>
   
      
        <?php do { ?>
		 <tr>
          <td height="42"><p><a href="updateaccount.php?record_no=<?php echo $row_admin['id']; ?>" class="style10"><span class="style12"><?php echo $row_admin['id']; ?>
            </span><span class="style11">&quot;Update&quot;</span></a></p></td>
      <td><span class="style9"><a href="deleteaccount.php?record_no=<?php echo $row_admin['id']; ?>">Delete</a></span></td>
      <td><?php echo $row_admin['first_name']; ?></td>
      <td><?php echo $row_admin['last_name']; ?></td>
      <td><?php echo $row_admin['email']; ?></td>
      <td><?php echo $row_admin['password']; ?></td>
      <td><?php echo $row_admin['user_name']; ?></td>
    </tr>
	 <?php } while ($row_admin = mysql_fetch_assoc($admin)); ?>
  </table>
  <p class="style11"><a href="deletaallaccount.php">Back</a></p>
</form>
</body>
</html>
<?php
mysql_free_result($admin);
?>