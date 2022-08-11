
<?php
		
		include("headerr.php");
	
?>


<html>
<head>

<title>PHARMACY</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:0px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:150px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;">Pharmacy management system</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2" >
		<h2><u>Add comments here</u></h2>
		<ul>
		<li><a href="logout.php">logout</a></li>
		 <li><a href="commentpass1.php">comment</a></li>
		  
		
		
			
         </ul>
         
         <!--<form action="search_drugs.php" method='POST'>
								<input type="text" name="searchs"  class ="searc" placeholder="Enter Drug Name Here..." required x-moz-errormessage="Please enter drug name">
								<input type="submit" value="Search" name="search" style="cursor:pointer;" class ="search"/>
							
		<div id="div22">	
         
		</form>-->
		
		
		<form name="f1" action="?" method="post" onsubmit="return check()">  
<table  border = "0 "style="color:black"width: 372px; margin-left: 0px>
<tr>
	<td>supplier Name:</td><td><input type="text" name="name" id="sender_name"></td>
	<td id="sender_name_error" class="error"></td>
		<td id="sender_name_2" class="error"></td>
</tr> 
<tr>
	<td>supplier Email*:</td><td><input type="email" name="email" id="email"></td>
	<td id="email_error" class="error"></td>
		

</tr> 
<tr>

	<td> Write Comment:</td><td><textarea  name="body" id="message" style="height:150px;width:200px;" ></textarea></td>
	<td id="message_error" class="error"></td>
</div>	
</div>
</tr> 

<?php
if(isset($_POST['name'])) {
	include("connection.php");
	mysql_query("insert into comment values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['body']."')");
     echo " <script>alert('you added comment successfuly!');
	 </script>".mysql_error();
}
?>
<tr><td colspan="2"><center><input type="submit" value="Send"> 
<input type="reset" value="Cancel" name="Cancel"id="b2"/></div>
</center> </td></tr>
</table>
</form>

<!--End of main menus-->
<!--<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->

<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } 
 ?>
<br>

</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var stringWithSpace = /^[a-zA-Z_ ]*$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp1 = /^\d{3}\d{3}\d{4}$/;
		
		if(document.getElementById("sender_name").value=="")  {
			document.getElementById('sender_name_2').style.display = "block";
			return false;
		} else {
			document.getElementById('sender_name_2').style.display = "none";
		}
		
		if (document.getElementById("message").value=="") {
			document.getElementById('message_error').style.display="block";
			return false;
		}
		else{
			document.getElementById("message_error").style.display="none";
		}
		

	}
</script>
	</div> <!-- end of main -->

</body>
</html>