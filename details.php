

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Details</title>
        <link href="img/logo_small.png" rel="icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
       
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <style>
           * {
  box-sizing: border-box;
}

                .form-container{
                    padding: 20px;
                }

      

                #radio_bt{
                    background:white;
                    width:100%;
                }
                #radio_bt:hover{
                    background: black;
                    color:white;
                }

        </style>


    </head>
    <script src="https://js.stripe.com/v3/"></script>
    <body>

		<div class="row" style="height:80%;padding:50px;">
			<div class="col-lg-6">	
                
            
            <div class="container">
            <div class="form-container z-depth-5">
                   
             <div class="row">
             <form class="col s12" id="reused_form" method="POST">
             <div class="row">
             <div class="input-field col s12">
                                   
            <input id="amount" type="text" name="uid"  required>
            <label for="name">customer_id</label>
             </div>
            </div>
						 
			<div class="row">
			<div class="input-field col s12">
             <input id="amount" type="text" required name="amount" >
              <label for="name">pay_Amount</label>
               </div>
               </div>
                              
                <div class="row">
								
                <div class="input-field col s12">
									
       <div class="col-lg-6">
      <button type="submit"  name="submit" >payed</button> 
                                    </div>

                                </div>
								
                                </div>
                            </div>
							
                        </form>
						<?php
if(isset($_POST['submit'])) {
include('form1/db1.php');
		$id=$_POST['uid'];
	    $balance=$_POST['amount'];
	$result = mysql_query("select * from  bankaccount where customer_id='$id'")or die (mysql_error());
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	 $cost=$row['balance'];	 
	 $useramount=$cost- $balance;
	 $result2 = mysql_query("select *from organizationaccount where id='1' ")or die (mysql_error());
	$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
	$oaccount=$row2['balance'];
	$organzation_balance=$oaccount+ $balance;
mysql_query("update bankaccount set balance='$useramount' where customer_id = '$id'")or die (mysql_error());	
mysql_query("update organizationaccount set balance='$organzation_balance' where id = '1'") or die (mysql_error());
echo "<script>alert('Sucessfully payed!');window.parent.location.href ='customer_page.php';</script>";
}
?>

                       
                    </div>
                
				
			</div>
			
            </div>
			</div>
			
            </div>
			
            <!--Import jQuery before materialize.js-->

            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        </div>
    </body>
</html>