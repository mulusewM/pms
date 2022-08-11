<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var select = document.getElementById('select');
 var select1 = document.getElementById('select1');
 var select2 = document.getElementById('select2');
 var previous_reading = document.getElementById('previous_reading');
 var present_reading = document.getElementById('present_reading')
 
 if (madeSelection(select, "Please Select Day!")) 
{  
 if (madeSelection1(select1, "Please Select Month!")) 
{ 
 if (madeSelection2(select2, "Please Select Year!")) 
{ 
if (isNumeric(previous_reading, "Please Insert Previous Reading!")) 
{ 
if (isNumeric(present_reading, "Please Insert Present Reading!")) 
{ 
return true;
     }
	 }
	 }
	 }
	 }
return false; 
}
function notEmpty(elem, helperMsg) 
{ 
if (elem.value.length == 0) 
{ 
alert(helperMsg);
 elem.focus(); // set the focus to this input
 return false; 
} 
return true; 
} 
function isNumeric(elem, helperMsg) 
{ 
var numericExpression = /^[0-9]+$/; 
if (elem.value.match(numericExpression)) 
{ 
return true;
 } 
else 
{ alert(helperMsg); 
elem.focus();
 return false;
 } 
}
function madeSelection(elem, helperMsg) 
{ 
if (elem.value == "Day") 
{ 
alert(helperMsg); 
elem.focus();
 return false; 
} 
else 
{ 
return true;
 } 
} 
function madeSelection1(elem, helperMsg) 
{ 
if (elem.value == "Month") 
{   
alert(helperMsg); 
elem.focus();
 return false; 
} 
else 
{ 
return true;
 } 
}  
function madeSelection2(elem, helperMsg) 
{ 
if (elem.value == "Year") 
{   
alert(helperMsg); 
elem.focus();
 return false; 
} 
else 
{ 
return true;
 } 
} 
</script> 
<?php
include 'db1.php';
$meter_id =$_REQUEST['meter_id'];

$result = mysql_query("SELECT * FROM MeterValue WHERE MeterID  = '$MeterID'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
	            $MeterId=$test['MeterId'] ;
				$first_name=$test['Cstomer FirstName'] ;
				$last_name=$test['Cstomer LastName'] ;
		        $Date=$test['Date'] ; 
				$Month=$test['Month'] ;
				$Year=$test['Year'] ;
				$kebele=$test['kebele'] ;
				$house_number=$test['House Number'] ;
				$previous_reading=$test['Previous Reading'] ;
				$present_reading=$test['Present Reading'] ;
				

?>

<p><h1>Consumtion Update</h1></p>
  <form method="post" action="updateconsumtion.php" onsubmit='return formValidator()' method="post">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
	 
	 <tr><td><td>Owners is <font color="#990033">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $first_name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $customerlastname; ?></font></td></td></tr>
	 
	 <tr><td><td>Meter ID<font color="#990033">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $meter_id; ?></font><br />Customer ID<font color="#990033">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $customer_id; ?></font><br />House Number<font color="#990033">&nbsp;&nbsp;&nbsp;<?php echo $housenumber; ?></font><br />Kebele<font color="#990033">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $kebele; ?></font></td></td></tr>
	 
	<tr><td><td>Precisely Recorded on</td></td></tr>
	<tr><td><td><font color="#990000"><?php echo $Date; ?>/<?php echo $Month; ?>/<?php echo $Year; ?></font></td></td></tr>
	<tr><td>Date:</td>
    <td><select name="select" id="select">
            <option>Day</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
			<option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option> 
			<option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option> 
            <option>13</option>
            <option>14</option> 
			<option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option> 
			<option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option> 
			<option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option> 
			<option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
          </select>
		  <select name="select1" id="select1">
             <option>Month</option>
			<option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option> 
			<option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option> 
			<option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option> 
            </select>
		  <select name="select2" id="select2">
            <option>Year</option>
			<option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option> 
			<option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option> 
			<option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option> 
			<option>2021</option>
            <option>2022</option>
            <option>2023</option> 
			<option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option> 
			<option>2028</option>
            <option>2029</option>
            <option>2030</option>
            <option>2031</option> 
			<option>2032</option>
            <option>2033</option>
            <option>2034</option> 
			<option>2035</option>
            <option>2036</option>
            <option>2037</option>
            <option>2038</option> 
			<option>2039</option>
            <option>2040</option>
            <option>2041</option>
            <option>2042</option> 
          </select></td></tr>
	
	<tr><td>previous_Reading:</td>
    <td><input type="text" name="previous_reading" id="previous_reading" value="<?php echo $previous_reading; ?>"/></td></tr>
	
	<tr><td>present_Reading:</td>
    <td><input type="text" name="present_reading" id="present_reading" value="<?php echo $present_reading; ?>"/></td></tr>
 
    <tr><td>&nbsp;</td>
	<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>