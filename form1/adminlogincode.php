<?php
include('db1.php');

if (isset($_POST['submit'])) {
$user_name=$_POST['user_name'];
$password= ($_POST['password']);
$result=mysql_query("select * from  creataccountadmin where user_name='$user_name' and password ='$password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
		session_start();
		$_SESSION['employeeid']=$row['employeeid'];                   
		header('location:../admin_page.php');
		}else{
		header('location:../index.php?errr');
		}
}
?>