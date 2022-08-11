<?php
include 'db1.php';
$meter_id =$_REQUEST['meter_id'];
	$Date = $_POST["select"];
    $Month = $_POST["select1"];
    $Year = $_POST["select2"];
    $previous_reading = $_POST["previous_reading"];
    $present_reading = $_POST["present_reading"];
		$totalcons=$present_reading - $previous_reading;
	  if($totalcons <0)
	  {
	echo '<script>alert("Please Correct Previous and present Consumption that means Previous is not greater than present Consumtion!")</script>';
     echo '<script>windows: location="viewmeterreaderrecord.php"</script>';
	  }
	else{
	if($totalcons <= 5)
	  {
	  $bill=$totalcons * 3.5;
	  }
	  else if($totalcons <= 10)
	   {
	  $bill=$totalcons * 4.0;
	    }
	else if($totalcons <= 25)
	   {
	  $bill=$totalcons * 4.5;
	    }
	else if($totalcons <= 40)
	   {
	  $bill=$totalcons * 5.0;
	    }
	 else
		 {
	  $bill=$totalcons * 7.0;
	      }
		  
		  $result = mysql_query("select * from metervalue where previous_reading='$previous_reading' and present_reading='$present_reading'") or die(mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
                                    echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
									echo '<script>windows: location="viewmeterreaderrecord.php"</script>';
									?>
                                    <?php
                                } else{

	mysql_query("UPDATE metervalue SET meter_id ='$meter_id', Date='$Date' ,Month='$Month' ,year ='$Year', previous_reading ='$previous_reading', present_reading ='$present_reading', WHERE meter_id = '$meter_id'");
		 echo '<script>alert("One Row Updated Successfully!")</script>';
		 echo "<script>windows: location='viewmeterreaderrecord.php'</script>";		
		
				}
				}
				?>
				
			