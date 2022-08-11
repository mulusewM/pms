<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <script type="text/javascript"> <!--------------------------TO PREVENT BACK AFTER SIGN OUT PROCESS-----------------------
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
 </script>
 <?php
 }
 ?>

<?php
	include("headerr.php");
?>

<?php
include('connection.php');
;

$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
	}								 
?>
<html>
<head>
<title>PHARMACY</title>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<?php 
		include("header.php");
		?>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
       <div id="sses2">
	   
         <ul id="unique">
		 <li><p style="margin-left:100px;font: bold 20px times new roman;">Well Come To Supplier Page<p></li>
		  <li><a href="Commentpass1.php" id="log" style="margin-left:80px;">comment</a></li>
		  
		  <li><a href="logout.php" id="log" style="margin-left:100px;">Logout</a></li>

         </ul>
		
         </div>
</td>
</tr>
<!--End of main menus-->

</td>
<?php 
		include("supplier_menu.php");
		?>
<!--End Of Sub menus-->
<!--Body section-->
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[0].value);
            div.style.display = 'block';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
		if(selectedOption == "6")
		{
			displayDiv(prefix,"6");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>
<!--<td valign="top">
<br>
<br>
				<div>
			
				<select  onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">view order</option>
						</select>
				
				
				<br /><br />
				<center><table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
		<tr>
			<td >
<div id="div22">
<center><div>
					<img src="img/9.png"  width="50px" style="margin-top:40px;margin-left:-400px">
					<h3 style="margin-top:-43px; margin-right:-7px;">PHARMACY</h3>
					<img src="img/9.png"  width="50px" style="margin-top:-84px; margin-left:420px"></p></div></center>
	             <div id="div1" style="display:none;"></div>	
			
				<div id="div2" style="display:none;">
				
					<form action="" method="post">
					<u><center><h4>ordered drugs </h4></center></u>
						<?php
							   include('connection.php');

						
	$sel="SELECT * FROM manorder";
	$sql=mysql_query($sel);
	
			
			
			$rowcolor=0;
			echo"<center>"	;
			$intt=mysql_num_rows($sql);
			echo"<br>";
			echo '<table border="2px" style="width:450px; border-color:#336699; border-radius:10px;margin-left:25px;margin-right:25px;" ><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">drug_id</th>
			<th bgcolor="#336699" ><font color="white" size="2">Drug_name</th> 
			<th bgcolor="#336699" ><font color="white" size="2">drug_type</th> 
			<th bgcolor="#336699" ><font color="white" size="2">
			quantity</th><th bgcolor="#336699" >
			<font color="white" size="2">order_date</th><th bgcolor="#336699" >
			<font color="white" size="2">order_id</th>
			
			 
			</tr>';
			while($row=mysql_fetch_array($sql)){
			$quant=$row["quantity"];
			$dn=$row["id"];
			if($quant>0){
    print ("<tr>");
	print ("<td><font size='2'>" . $row['id'] . "</td>");
	print ("<td><font size='2'>" . $row['drugname'] . "</td>");
	print ("<td><font size='2'>" . $row['drugtype'] . "</td>");
    print ("<td><font size='2'>" . $row['quantity'] . "</td>");	
	print ("<td><font size='2'>" . $row['orderdate'] . "</td>");
	print ("<td><font size='2'>" . $row['orderid'] . "</td>");
	print ("</tr>");
	}
	
	
	}
	print( "</table>");
	echo"</center>"	;					
	echo"<br>";
	echo"<font color='blue'>There are &nbsp;</font><font color='blue'>".$intt."&nbsp; Type of drugs are ordered </font>";
													
					
						?>			
					</form>
					
					<form action="" method='POST'>
<input type="hidden" name="searchs" value="<?php $date=date("Y-m-d");echo $date;?>"/>
<input type="submit" value="accept" name="submit"  class="button_example"/>
<input type="reset" value="reject" name="remove"  class="button_example"/>

</form>
</td></tr></table>
					</div>
	

</div>
</td>
</tr>
</table>
<!--End Body of section-->
</table>

<!--Footer-->
<?php
include("footer.php");
?>
<!--End of Footer-->
                                                                        
</body>
</html>

