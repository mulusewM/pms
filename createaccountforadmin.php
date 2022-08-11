<?php
include 'form1/db1.php';
$employeeid = $_POST['employeeid'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$user_name = $_POST['user_name'];
$pinnumber = $_POST['pinnumber'];

mysql_query("INSERT INTO  creataccountadmin (employeeid, first_name, last_name, email, password, user_name,pinnumber)
        VALUES ('$employeeid', '$first_name', '$last_name', '$email', '$password', '$user_name', '$pinnumber')");


echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="crateaccount.php"</script>';
?>