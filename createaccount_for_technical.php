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


$result = mysql_query("select * from creataccounttechnicalsupervisor where email='$email' or pinnumber='$pinnumber' or  employeeid='$employeeid'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="creataccountfortechnicalsupervisor.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  creataccounttechnicalsupervisor (employeeid, first_name, last_name, email, password, user_name, pinnumber)
        VALUES ('$employeeid', '$first_name', '$last_name', '$email', '$password', '$user_name', '$pinnumber')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="creataccountfortechnicalsupervisor.php"</script>';
}
?>