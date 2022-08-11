<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con44 = "localhost";
$database_con44 = "water44";
$username_con44 = "root";
$password_con44 = "";
$con44 = mysql_pconnect($hostname_con44, $username_con44, $password_con44) or trigger_error(mysql_error(),E_USER_ERROR); 
?>