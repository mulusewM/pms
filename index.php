
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Customer service Management System</TITLE>

<META NAME="Generator" CONTENT="EditPlus">

<META NAME="Author" CONTENT="">

<META NAME="Keywords" CONTENT="">

<META NAME="Description" CONTENT="">
<link rel="stylesheet" type="text/css" href="main.css" />
<style type="text/css">
link{

a:link {color:white;}      
a:visited {color:;}  
a:hover { color:;} 
a:active {color:}  
}
#navMaun {
    background-color: ; 
    margin :0;
    padding :0;
}
#navMaun ul
{
    margin :0;
    padding :0;
    line-height :30px;
    }
    #navMaun li
    {
        margin :0;
    padding :0;
    list-style :none;
    float :left ;
    position :relative ;
    background :;
    
    }
    #navMaun ul li a 
    {
        text-align :center ;
        font-family :"Comic Sans MS", Cursive ;
        text-decoration :none;
        height :30px;
        width :150px;
        display :block ;
        color : ;
        border :1px solid ;
        text-indent:1px 1px 1px ;
    }
#navMaun ul ul
{
    position :absolute ;
    visibility:hidden ;
    top:32px;
    
    }
    #navMaun ul li:hover ul
    {
        visibility :visible ;
    }
#navMaun li:hover
{ 
    background : ; 
    }
#navMaun ul li:hover ul li:hover
{
    background :;
    color :; 
}
#navMaun a:hover
{ 
    color :; 
} 
.clearFloat
{
    clear:both ;
    margin :0;
    padding :0;

}  
.style1 {font-family: "Times New Roman", Times, serif}
.style2 {color: #131455
}
body {
background-color:#669999;
	background-repeat: repeat;
	background-color: rgba(6, 35, 20, 0.34);
}
.style9 {
	font-family: "Times New Roman", Times, serif;
	color: #0000FF;
	font-size: 36px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></HEAD>
<BODY onLoad="MM_preloadImages('Image/58.jpg')" bg color="white" width="534" height="300" border="4" alt="">
<table width="975" height="818" align="center" cellpadding="2" cellspacing="2" style=" background-color:#b0e0e6;box-shadow:rgba(0,0,0,0.3) 0px 0px 10px;width:
950px;height:650px; border-radius:20px;color: #663366; text-shadow:0px 0px 10px #99ccff;">


  </CENTER></td></tr>
   <tr>
       <img src="Image/Capture1.jpg" width="1125" height="120" border="3"

  </tr>
  <tr bgcolor="#b0e0e6">
  <td bgcolor="#b0e0e6"  width='106' height='40'align='center' ><a href="gallary.php" target="myframe"><strong><font color="000044">Home</font></strong></a></td>
      <td bgcolor="#b0e0e6"width='121'height='40'align='center' ><div align="center"><strong><a href='users.php' target="myframe"><font color="000044">Users</font></a></strong></div></td>
  
		     <br class ="clearFloat" />
    </div></td>
    <td  bgcolor="#b0e0e6"width="250">
    <div align="center"><strong><a href="form1/Customerapplyregistrationform.php" target="myframe"><span class="style2">Customer Registration</span></div></td>

    <td bgcolor="#b0e0e6"width='125'height='40'align='center' ><strong><a href='info.php'target="myframe">
    <div align="center"><strong><font color="000044">About Us</font></strong></div></td>
  <td bgcolor="#b0e0e6"width='124'height='40'align='center' ><div align="center"><strong><a href='contact.php' target="myframe"><font color="000044">Contact us</font></a></strong></div></td>
   <!--<td bgcolor="666666"width='130'height='40'align='center' ><div align="center"><strong>
   <a href="d/documnt.php" target="myframe"><font color="000044"></font></a></strong></div></td>-->
  </tr>
  </tr>
	<td bgcolor="#f5f5dc" width="106" >
  <tr bgcolor="#f5f5dc">

  <td  bgcolor="#f5f5dc" height='322' colspan="2"  style="font-style:italic;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;
  "><p align="left"><a href='home_page.php' target="myframe" class="style1"><strong><font color="black"><img src="Image/login_button_01.jpg" width="201" height="89"></font></strong></a></p>
      <p align="center"><span style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:5px;color:#jjlldd; text-shadow:0px 0px 1px black;
	  "><img src="Image/6.gif" width="196" height="203"></span></p>
   <p></p>
   
    <td background= "Image/gold.jpg"colspan="7" rowspan="3" style="font-style:regular;box-shadow:rgba(0,0,0,0.3) 0px 0px 5px; border-radius:2px;color:#jjlldd; text-shadow:0px 0px 1px black;" ><iframe src="gallary.php" name="myframe" frameborder="3"  width="870" marginwidth="" height="550" align="center" marginheight="" scrolling="auto"></iframe></tr>
  <tr bgcolor="#f5f5dc">
    <td background="gold.jpg" height='29' colspan="2" rowspan="2"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','Image/58.jpg',1)"><img src="Image/19.jpg" name="Image7" width="200" height="111" border="3"></a></td>
  </tr>

  <tr bgcolor="#f5f5dc">
    <td width="4"  height='204' colspan="2">    </td>
  </tr><tr>
    <td  bgcolor="#d3d3d3" height='50'  colspan='9'><p align="center"><font color="#0000000"><b><a href='contact1.php' target="myframe">
      <div align="center">Develeper </div><p align="center"><font color="red"><b>Copy right @ 2019 Customer service Management System </b> <b><a href="#top"> Bottom to Top </a></b>  </tr>
</table></font></p></td>
  </tr>
</table>
<?php if(isset($_GET['errr'])){
	echo "<script>alert('Invalid Username or Password Please Try Again!!!')</script>";
	} ?>
<?php if(isset($_GET['err'])){
	echo "<script>alert('Please Insert Username and Password To Login Dont Use Back Arrow!!')</script>";
	} ?>
</HTML>

