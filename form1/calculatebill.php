<?php session_start(); ?>
<?php
  include 'db1.php';
@$owner_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM waterconsumtion WHERE id  = '$owner_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$customerfirstname= $test['customerfirstname'] ;				
				$customerlastname=$test['customerlastname'] ;
				$meterid=$test['meterid'] ;
				$previous_Reading=$test['previous_Reading'] ;
				$present_Reading=$test['present_Reading'] ;
				$kebele=$test['kebele'] ;
				$phonenumber=$test['phonenumber'] ;
?>

<p><h1>Owners Bill</h1></p>
 <h1>Name: <?php echo $customerfirstname.'&nbsp;' .$customerlastname;?></h1>
 <h1>Meter Id: <?php echo $meterid;?></h1>
<p><?php $date=date('y/m/d H:i:s');
 echo $date;?></p>
 <form action="addbill.php" method="post" >
 <table width="346" border="1">
  <tr>
  <td>owners_id:</td>
    <td><input type="118" name="owners_id" Required="Required" value="<?php echo $id; ?>" />
	</tr>
 <tr>
  <input type="hidden" name="meterid" value="<?php echo $meterid; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"Required="Required" value="<?php echo $previous_Reading; ?>" /></td>
    <td>Cu.m</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres" Required="Required" value="<?php echo $present_Reading; ?>"  /></td>
    <td>Cu.m</td>
  </tr>
  <tr>
    <td>Price/Cu.m</td>
    <td><input type="text" name="price" Required="Required"value=""  /></td>
    <td>Birr</td>
  </tr>
  <tr>
  $organazition_amount=$oamunt + $amount;
  <td>date:</td>
    <td><input type="118" name="date"Required="Required" value="<?php echo $id; ?>" />
	</tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>