
   
  
<html>
<head>

<link rel="stylesheet" type="text/css" href="Style.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript" src="js/image_slide.js"></script>
<script language="javascript">

function load() {
var load = window.open ('index.php','_self',false);

}
function loadEng() {
var load = window.open ('index.php','_self',false);

}
// -->
<body>
<div id ="background">
<div id="wrapper">
<table width="1020px" height="42px" border="1" background-color="#333">
<tr width="1020"style="margin-bottom:1px;margin-top:1px;background-color:green  ;border:0px solid #333" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">
</td></tr></table>

<div id="banner">

<div id="navigation">

      <ul>
 <li>
 
          <div align="right" style="color:white;"<a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
                <ul class="sub-menu">
                      <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>
                  
                  
                
                </ul>
          </div>
        </li>
		  </ul>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
</script>





</head>
	<form action="transfer.php">
<div align="center">
<div class="form-group col-lg-12">

		<br><br><br>
                 <label class="col-lg-2 control-label" for="fname"></label>
                                        <div class="col-lg-6">
								<label>Entre your account number</label>
										<br><br>
                           <input class="form-control" name="text3" type="number"min="1" onKeyPress="return isNumberKey(event)/>
                                        </div>
                                    </div>

		<div class="form-group col-lg-12">
		<br><br><br>
                 <label class="col-lg-2 control-label" for="fname"></label>
                                        <div class="col-lg-6">
								<label>Entre Reciever account</label>
										<br><br>
                           <input class="form-control" name="text1" type="number"min="1" onKeyPress="return isNumberKey(event)" required="required"/>
                                        </div>
                                    </div>
         
			<div class="form-group col-lg-12">
                                        <label class="col-lg-2 control-label" for="fname"></label>
                                        <div class="col-lg-6">
										<label>Enter Your Amount pay amount of birr to water cunsumtion</label>
										<br><br>
                             <input class="form-control" name="text2" type="number"min="1" onKeyPress="return isNumberKey(event)/>
                                        </div>
                                    </div>
			<div class="form-group col-lg-12">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-6">
										<br><br>
                             <input name="submit" type="submit" value="submit">
                           <!--  <input class="btn1 btn-warning" name="home" type="button" value="Back"ONCLICK="window.location.href='transfer.php'"/>-->
							
							<p align="center">
</p>
</p>
                                        </div>
                                    </div>
</div>
     
          </form>		  
        <?php
	
if(isset($_POST['submit'])) ///forsubmit data           
{		     
//$tid=$_POST['tranid'];	 
//$trantype=ucwords($_POST['trantype']);
//$tranmethod=ucwords($_POST['tranmethod']);
$date=date("Y-m-d");			 
$accountnumber=ucwords($_POST['accountnumber']);			 
$amount=ucwords($_POST['amount']);			 
//$remarks=ucwords($_POST['remarks']);
$res = mysqli_query("SELECT balance FROM  bankaccount WHERE accountnumber='$re'" );
while($res = mysqli_fetch_array($d, MYSQL_BOTH))
{	 			
 $senderbalance = $row['balance'];
		 }
	 
        if(isset($_GET['submit']))
        {
		    $date=date("Y-m-d");
			$re=$_GET['text3'];
            $aid=$_GET['text1'];
            $aamt=$_GET['text2'];
			if($_SESSION['accountnumber']==$_GET['text1'])
               {
	echo '<table border="2" align="center">';
    echo '<td>Between the same account number transfare is inposible=?';	
			   }		
		  else
		  {

		   
	$result = mysqli_query("SELECT accountnumber FROM bankaccount WHERE accountnumber='$re'" );
	
      if(mysqli_num_rows($result) == 0)
	  {
	  echo '<table border="2" align="center">';
     echo '<td>You Entared Account Number is Not Valid Exist=?';
	}
     elseif ($senderbalance< $_GET['text2'])
    {
	   echo '<table border="2" align="center">';
		echo '<td>you have not avilable amount to transfar. Amount ='. $senderbalance;
	   //echo $aamt;
	} 
	else
	{
   mysqli_query("INSERT INTO transfer(Toid, Fromid, amt) VALUES ('$aid','$accountnumber','$aamt')");
   
			
		$result1=($senderbalance - $_GET['text3']);
		mysqli_query("update customer set balance='$result1' WHERE accountnumber ='$accountnumber'");
			mysqli_query("update transactions set balance='$result1' WHERE accountnumber ='$accountnumber'");
	mysqli_query("update customer set balance='$result1' WHERE accountnumber ='$accountnumber'");
	mysqli_query("update customer set depositdate='$date'  WHERE accountnumber ='$accountnumber'");
	mysqli_query("update customer set transferamount='$aamt'  WHERE accountnumber ='$accountnumber'");
	mysqli_query("update customer set reciveraccount='$aid'  WHERE accountnumber ='$accountnumber'");
	
	/*$recivername = mysqli_query("SELECT `username` FROM `customer` WHERE accountnumber='$aid'" );
	while($row=  mysqli_fetch_array($recivername))
	{
	$Name=$row['username'];
	mysqli_query("update customer set recivername='$Name'  WHERE accountnumber ='$accountnumber'");
	}*/

	
	 $res = mysqli_query("SELECT balance FROM customer WHERE accountnumber='$aid'" );
	
	 while($row=  mysqli_fetch_array($res))
	 {
		 $recvbalance = $row['balance'];
	 }
	
	$result4 = mysqli_query("SELECT `amt` FROM `transfer` WHERE Toid='$aid'" );
	 $result4=($recvbalance + $_GET['text2']);
	mysqli_query("update users set balance='$result4' WHERE accountnumber ='$aid'");
	mysqli_query("update customer set balance='$result4' WHERE accountnumber ='$aid'");
		mysqli_query("update interest set balance='$result4' WHERE accountnumber ='$aid'");
			mysqli_query("update transactions set balance='$result4' WHERE accountnumber ='$aid'");
	  echo '<table border="2" align="center">';
            echo '<td>Success Fully Transfer=';
            echo $aamt; 
			echo "<br>The Recever Account Number is= ".$aid;
			echo "<br>Now your Balance is=".$result1;
			
	}
           }
		  
		 }

            echo '</table>';
			}
		?>
	
<tr>
<td align="center">
 <p align="center">
  <a href="teller_data.php">
</td></tr>
</body>
</html>

