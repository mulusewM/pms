<?php
include 'form1/db1.php';
?>
<?php
$employeeid = $_POST['employeeid'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = ($_POST['password']);
$pinnumber = $_POST['pinnumber'];


$result = mysql_query("select * from   creataccountadmin where email='$email' or password='$password' or employeeid='$employeeid' or pinnumber='$pinnumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="crateaccount.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO   creataccountadmin (employeeid, first_name, last_name, email,user_name, password, pinnumber)
        VALUES ('$employeeid', '$first_name', '$last_name', '$email', '$user_name','$password', '$pinnumber')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="crateaccount.php"</script>';
}
?>