<table align="center" id="insides" width="850px" style="background: white url(img/2.jpg);">

<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table class="left">

<tr>
<th align="center" width="250px" height="20px" "></th>
</tr>

<td></td>
<tr>

<td class= "left_menu" >

<ul class="menu">
          <form method="POST">
		 
		    <a href='item_detail.php?action=clear&id=<?php echo $item_id;?>'><img src="images/bulet.jpg" width="20px" height="10px" style="border-radius:25px;">&nbsp prepare Bill </a>
		  <a href="viewcart.php"><img src="images/bulet.jpg" width="20px" style="border-radius:22px;">&nbsp view cart</a>
		  <a href="view_customer_bill.php"><img src="images/bulet.jpg" width="20px" style="border-radius:22px;">&nbspView  Bill  info.</a>
		  <a href="cashier_report.php"><img src="images/bulet.jpg" width="20px" style="border-radius:22px;">&nbspGenerate Report</a>
		  <a href="cashierchanpass.php"><img src="images/bulet.jpg" width="20px" style="border-radius:22px;">&nbspchange password</a>
         </ul>
		 </form>

</td>
<td width="20px"border="0"></td>

</tr>
<tr><td height="20px"></td></tr>
</table>
<?php 
	include("findus.php");
?>


