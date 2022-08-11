
 <?php
include 'db1.php';
?>
<?php
$meter_id = $_POST['meter_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Date = $_POST['Date'];
$Month = $_POST['Month'];
$Year = $_POST['Year'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$previous_reading = $_POST['previous_reading'];
$present_reading = $_POST['present_reading'];


$result = mysql_query("select * from metervalue where meter_id='$meter_id' or house_number='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="Recordmeterreadingform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  metervalue  (meter_id, first_name, last_name, Date, Month, Year, kebele, house_number, previous_reading, present_reading)
        VALUES ('$meter_id', '$firstname', '$lastname', '$Date', '$Month', '$Year', '$kebele', '$housenumber', '$previous_reading', '$present_reading')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="Recordmeterreadingform.php"</script>';
}
?>

 
