


<?php
session_start();
include("connection.php");
$ctrl = $_REQUEST['enable'];
$SQL = "update user_account set status='2' WHERE user_id= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'manage_account.php'</script>";
?>