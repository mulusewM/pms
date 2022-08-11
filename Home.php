
<?php
	include("headerr.php");
?>

<html>
<head>
<title> PHARMACY</title>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script>
				number = 1;
				function animate(){
				document.image_rotate.src = number+".jpg";
				number++;
				if (number > 3)   
				number = 1;  
				}
				setInterval(animate, 2000);
			</script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:0px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:100px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;"> PHARMACY MANAGEMENT SYSTEM</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="5" width="900px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
		 <li><a href="login.php" id="log">Login</a></li>
         <li><a href="help1.php">Help</a></li>
         <li><a href="baiscinfo.php">Basicinfo</a></li>
		 <li><a href="developer.php">Developer</a></li>
		 <li><a href="contactus1.php">ContactUs</a></li>
		 <li><a href="aboutus.php">AboutUs</a></li>
		 <li><a href="home.php">Home</a></li>
         </ul>
		  <li><a href="search_drugs.php" method='POST'>
								<input type="text" name="searchs"  class ="searc" placeholder="Enter Drug Name Here..." required x-moz-errormessage="Please enter drug name">
								<input type="submit" value="Search" name="search" style="cursor:pointer;" class ="search"/>
        
         </div>
		
    </div>

</td>
</tr>
<!--End of main menus-->
<!--End of main menus-->
<table align="center" id="insides" width="1000px" style="background: white url(img/2.jpg);">
<tr>
<!--Sub menus-->
<td width="25%" valign="top" id="insides">
<table>

<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="4">PHARMACY</font></th>
</tr>

<tr>
<td > <img src="slideshow/images/2.png" style="height:300px;"  valign="top"></td>
</tr>


</table>
<table border="0" style="margin-bottom:0px;">
<tr>
<th width="250px" bgcolor="#336699" height="25px"><font face="times new Roman" color="white" size="5"><center>Find Us</center></font></th>				
</tr>
<tr><td>
                    <a href="http://www.facebook.com"> <img src="images/facebook.jpg" width="40px" height="30px" style="margin-top:20px;"></a>&nbsp
					<a href="http://www.gmail.com"> <img src="images/email.png" width="30px" height="20px"style="margin-top:20px;"</a>&nbsp &nbsp &nbsp
					<a href="http://www.yahoo.com"> <img src="images/yahoo.png" width="30px" height="20px"style="margin-top:20px;"</a>
				    <!--<a href="http://www.youtube.com"> <img src="images/youTube.png" width="30px" height="20px"style="margin-top:20px;"</a>-->
</td></tr>
</table>



</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">

<div class="image">
							<IMG NAME="image_rotate" class="image_wrapper fl_image" src="1.jpg"  
							style="height:330px;width:630px"/>
						</div><br>
<div> <center><h4 style="font-family:times new roman">
          Email :ayisheshim.birihanie@gmail.com
		  <br>
		  Facebook:ayisheshim birihanie
		  <br>
		           +251943490374
				   <br>
          Phone No. +125949986888<br>
		  Burie Ethiopia
          </h4></center> 		  
</div>						
<div class="accdiv">


  
</table> 
	
  </form>
<!--Php Script-->  
	

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

