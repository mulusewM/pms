<?php require_once('Connections/con44.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO creataccountcusexpert (first_name, last_name, email, password, re_password, user_name) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['first_name'], "text"),
                       GetSQLValueString($_POST['last_name'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['re_password'], "text"),
                       GetSQLValueString($_POST['user_name'], "text"));

  mysql_select_db($database_con44, $con44);
  $Result1 = mysql_query($insertSQL, $con44) or die(mysql_error());

  $insertGoTo = "viewcreataccountcusexpert.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?><style type="text/css">
<!--
body {
	background-image: url(Image/gold.jpg);
}
.style4 {
	color: #FF33FF;
	font-size: 18px;
	font-weight: bold;
}
.style7 {font-size: 18px}
.style9 {color: #FF00FF; font-weight: bold; }
.style10 {color: #FF00FF}
.style13 {color: #FF00FF; font-size: 18px; font-weight: bold; }
-->
</style>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" name="form2" method="POST">
  <p><br>
     <small><a href="http://www.satisfaction.com/cool-text-maker/"></a></small>
  <div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
    <div style="background-color:green; font-family:Arial, Helvetica, sans-serif; color:#00FFFF; padding:5px; height:22px; width:390px;">
      <div style="float:left;">
        <div align="right"><strong>Create account page For CustomerExpert  </strong></div>
      </div>
      <div style="float:right; margin-right:3px; background-color:#cccccc; width:25px; text-align:center; height:22px;"><a href="viewaccount.php">X</a></div>
    </div>
    <table width="392" height="226" align="center">
      <tr>
        <td width="142" height="24" valign="top"><div align="right" class="style4 style10">
          <div align="right">Firstname:</div>
        </div></td>
        <td width="238"><input name="first_name" type="text"Required="Required" id="first_name"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style13">Lastname:</div></td>
        <td><input name="last_name" type="text" Required="Required"id="last_name"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style13">Email:</div></td>
        <td><input type="text" name="email"Required="Required" id='email'>
            <div id='div'></div></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style9"><span class="style7">Password</span>:</div></td>
        <td><input type="password" name="password" Required="Required"id="password"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style13">Re_EnterPassword:</div></td>
        <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg2"></span>
            <input type="password" name="re_password" Required="Required"id="re_password"></td>
      </tr>
      <tr>
        <td height="24" valign="top"><div align="right" class="style13">UserName:</div></td>
        <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg1">
          <input type="text" name="user_name" autocomplete="off"Required="Required" id="user_name">
        </span></td>
      </tr>
      <tr>
        <td height="64" colspan="2" valign="top"><p>
            <input name="submit22" type="submit" value="Save">
            <input name="submit23" type="submit" value="New">
            <input name="submit2" type="submit" value="Cancel">
        </p>          <p>&nbsp; </p></td>
      </tr>
    </table>
  </div>
  <p> </p>
  
  
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>		
