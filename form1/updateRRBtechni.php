<?php session_start(); ?>
<?php
include 'db1.php';
$customer_id =$_REQUEST['custome_id'];

$result = mysql_query("SELECT * FROM technicalreport WHERE customer_id  = '$custome_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$customer_id=$test['customer_id'] ;
				$firstname= $test['firstname'] ;					
				$lastname=$test['lastname'] ;
				$Kebele=$test['Kebele'] ;
				$housenumber=$test['housenumber'] ;
				$meterid=$test['meterid'] ;
				$Date=$test['Date'] ;
				$Month=$test['Month'] ;
				$Year=$test['Year'] ;
				$task=$test['task'] ;
				

?>

<p><h3>Update Registered Report</h3></p>
  <form method="post" action="updatetorbytechn.php">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
  
  <tr><td></td>
      <td><input type="hidden" name="firstname" value="<?php echo $firstname; ?>"/></td></tr>
   
   <tr><td></td>
    <td><input type="hidden" name="lastname" value="<?php echo $lastname; ?>" /></td></tr>
	
   
	<tr><td>Customer Id:</td>
    <td><input type="text" name="customer_id" Required="Required" value="<?php echo $customer_id; ?>"/></td></tr>
	
	<tr><td>First Name:</td>
    <td><input type="text" name="firstname" Required="Required" value="<?php echo $firstname; ?>"/></td></tr>
	
	<tr><td>Last Name:</td>
    <td><input type="text" name="lastname" Required="Required" value="<?php echo $lastname; ?>"/></td></tr>
	
	<tr><td>kebele:</td>
    <td><input type="text" name="Kebele" Required="Required" value="<?php echo $Kebele; ?>"/></td></tr>
	
	<tr><td>Meterid:</td>
	
    <td><input type="text" name="meterid" Required="Required" value="<?php echo $meterid; ?>"/></td></tr>
	
	<tr><td>Task Done Date :</td>
    <td><input type="text" name="Date" Required="Required" value="<?php echo $Date; ?>"/></td></tr>
	
	<tr><td>Task Done Month :</td>
    <td><input type="text" name="Month" Required="Required"value="<?php echo $Month; ?>"/></td></tr>
	
	<tr><td>Task Done Year :</td>
    <td><input type="text" name="Year" Required="Required" value="<?php echo $Year; ?>"/></td></tr>
	
	<tr><td>Task Done:</td>
    <td><input type="text" name="task" Required="Required" value="<?php echo $task; ?>"/></td></tr>
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>