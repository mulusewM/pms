<?php session_start(); ?>
<?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM technicalreport WHERE id  = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$firstname= $test['firstname'] ;					
				$lastname=$test['lastname'] ;
				$customerfirstname=$test['customerfirstname'] ;
				$customerlastname=$test['customerlastname'] ;
				$Kebele=$test['Kebele'] ;
				$housenumber=$test['housenumber'] ;
				$meterid=$test['meterid'] ;
				$date=$test['date'] ;
				$task=$test['task'] ;
				

?>

<p><h1>updateRegisteredReportbytechn</h1></p>
  <form method="post" action="edituserecex.php">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
  
  <tr><td>Technical First Name:</td>
      <td><input type="text" name="firstname" value="<?php echo $firstname; ?>"/></td></tr>
   
   <tr><td>Technical Last Name:</td>
    <td><input type="text" name="lastname" value="<?php echo $lastname; ?>" /></td></tr>
	
    <tr><td>Customer First Name:</td>
    <td><input type="text" name="customerfirstname" value="<?php echo $customerfirstname; ?>"/></td></tr>
	
	<tr><td>Customer Last Name:</td>
    <td><input type="text" name="customerlastname" value="<?php echo $customerlastname; ?>"/></td></tr>
	
	<tr><td>Kebele:</td>
    <td><input type="text" name="Kebele" value="<?php echo $Kebele; ?>"/></td></tr>
	
	<tr><td>housenumber:</td>
    <td><input type="text" name="housenumber" value="<?php echo $housenumber; ?>"/></td></tr>
	
	<tr><td>Meterid:</td>
    <td><input type="text" name="meterid" value="<?php echo $meterid; ?>"/></td></tr>
	
	<tr><td>Date Report:</td>
    <td><input type="text" name="date" value="<?php echo $date; ?>"/></td></tr>
	
	<tr><td>Task Done:</td>
    <td><input type="text" name="task" value="<?php echo $task; ?>"/></td></tr>
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>