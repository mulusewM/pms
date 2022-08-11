<html>
<head>
<style type="text/css">
body{
background-image:url(image/73.jpg);
background_size:cover;
}
.a{
width:400px;
height:470px;
background-color:#CCCCCC;
margin:0 auto;
margin-top:40px;
padding-top: 10px;
padding-left: 50px;
-webkit-border-radius: 15px;
color:#003399;
}
.a input[type="text"]{
width:150px;
height:30px;
width:200px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
#select3{
width:200px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
#select4{
width:200px;
height:30px;
border:1;
border-bottom-style:solid;
border-color:red;
border-radius:5px;
-webkit-border-radius:5px;
}
#textarea{
width:200px;
height:80px;
border:1;
border-bottom-style:solid;
border-color:red;border-radius:5px;
-webkit-border-radius:5px;
}
.a input[type="reset"]{
width:65px;
height:25px;
border:1;
border-bottom-style:solid;
border-color:#00CC33;
border-radius:5px;
-webkit-border-radius:5px;
background-color:#99FF00;
}
.a input[type="submit"]{
width:65px;
height:25px;
border:1;
border-bottom-style:solid;
border-color:#00CC33;
border-radius:5px;
-webkit-border-radius:5px;
background-color:#99FF00;
}
</style>
<script type='text/javascript'>
 function formValidator() { // Make quick references to our fields
 var customer_id = document.getElementById('customer_id');
 var meterid = document.getElementById('meterid');
 var select = document.getElementById('select');
 var select1 = document.getElementById('select1');
 var select2 = document.getElementById('select2');
  var textarea = document.getElementById('textarea');
 if (isNumeric(customer_id, "Please Enter Valid Customer Id!")) 
  {
 if (isNumeric(meterid, "Please Enter Valid Meter Id!")) 
  {
if (madeSelection(select, "Please Select Day!")) 
{  
 if (madeSelection1(select1, "Please Select Month!")) 
{ 
 if (madeSelection2(select2, "Please Select Year!")) 
{ 
if (lengthRestriction(textarea, 6, 100)) 
{
 return true;
     }
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
function lengthRestriction(elem, min, max)
 { 
var uInput = elem.value; 
if (uInput.length >= min && uInput.length <= max) 
{ 
return true; 
} 
else 
{ 
alert("Please Insert between " + min + " and " + max + " Character! ");
 elem.focus(); return false; 
} 
}
</script> 
</head>
<body>
<div class="a">
<h2><center>Record Maintenance Report</center></h2>
<br>
<br>
<form action="Recordreportfortechnical.php"  onsubmit='return formValidator()' method="post">
<table border="0" cellspacing="11">

<td>Customer Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="customer_id" name="customer_id" placeholder="Enter Customer Id" /></td>
	     </tr>
		       <tr>
<td>Meter Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="meterid" name="meterid" placeholder="Enter Meter id" /></td>
				</tr>
<tr><td>
Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="day" id="select">
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
		  <select name="month" id="select1">
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
		  <select name="year" id="select2">
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
		  
		  <tr><td>Task &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea height="300" width="20" id="textarea" name="task" placeholder="Pleace Write Task You Performe it here!!!"/></textarea></td></td></tr>	
		  <tr></tr>    
<tr>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit"  id="s"name="Send" value="Send" />&nbsp;&nbsp;&nbsp;
    <input type="reset" name="Cancel" value="Cancel" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>
ssss