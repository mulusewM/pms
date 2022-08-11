<?php session_start(); ?>
<?php
 include 'db1.php';
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM oldcustomeordermaintenance WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$test) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
			

?>
<form action="deloldorder.php" method="post">
<p>Are you sure you want to delete this record!</p>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>