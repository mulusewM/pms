<?php 
include 'dbc.php';
?>
<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"Uploaded_Files/" . $_FILES["image"]["name"]);
			
			$title=$_POST['title'];
			
			$location="Uploaded_Files/" . $_FILES["image"]["name"];
			
			
			$save=mysql_query("INSERT INTO   adocument (title,document) VALUES ('$title','$location')");
			echo"sucessfuly inserted to the database";
			echo"<br>";
			//header("location: insert_documnts.php");
			echo"<a href='adminhome.php'>Back</a>";
			exit();					
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add DOcuments</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript">

function validatePosition(fld) {
    var error = "";
  
    if (fld.value == "") {
        fld.style.background = 'yellow'; 
        error = "You didn't enter a Title.\n";
    }   else {
        fld.style.background = 'green';
    }
    return error;
}



function validatePosition2(fld) {
    var error = "";
   
    if (fld.value == "") {
        fld.style.background = 'yellow'; 
        error = "You didn't enter a Document.\n";
    }  else {
        fld.style.background = 'green';
    }
    return error;
}



function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validatePosition(theForm.title);
   reason += validatePosition2(theForm.image);
     
   
  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    return false;
  }

  return true;
}
</script>


</head>

<body bgcolor=#ffffcc>
<div align="left">
<fieldset style="width:30%">
<legend><h3>Add Documents</h3></legend>
<table width="504" border="0">
<form action="insert_documnts.php" method="POST" name="insert_work_flow" enctype="multipart/form-data" onSubmit="return validateFormOnSubmit(this)">
  <tr>
    <td width="125" >Title</td>
    <td width="650" colspan="3"><input name="title" type="text" size="29" />
     </td>
     <tr>
     <td>  Figure
      </td>
      <td> <input name="image" type="file" size="29"  /></td>
   

  
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="insert" value="Insert" />&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></td>
    </tr>
	<tr><td><a href='adminhome.php'><b>Back <p align=center></p> </b></a>
 </tr>
  </form>
</table>
</fieldset>
</div>

</body>
</html>
