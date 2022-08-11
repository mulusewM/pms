<?php
include 'form1/db1.php';
?>
<?php
$employeeid = $_POST['employeeid'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = ($_POST['password']);
$user_name = $_POST['user_name'];
$pinnumber = $_POST['pinnumber'];


$result = mysql_query("select * from creataccountbillofficer where email='$email' or password='$password' or employeeid='$employeeid' or pinnumber='$pinnumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="creataccountforbillofficer.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  creataccountbillofficer (employeeid, first_name, last_name, email, password, user_name, pinnumber)
        VALUES ('$employeeid', '$first_name', '$last_name', '$email', '$password', '$user_name', '$pinnumber')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="creataccountforbillofficer.php"</script>';
}
?>