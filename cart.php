<?php 
session_start();
if(isset($_POST['addToCart']))
{

	if(isset($_SESSION['cart']))
	{
	//$item_array_id = array_column($_SESSION['cart'],'item_id');
  // if(!in_array($_GET['id'],$item_array_id))
   //{
	 $count=count($_SESSION['cart']);  
	 $item_array = array(
	     'item_id'  =>  $_POST['hidden_id'],
		'item_name'  =>  $_POST['nam'],
 		'item_price'  => $_POST['hiden_price'],
		'item_quantity'  =>  $_POST['val'],
		'sold_date'  =>  $_POST['hidden_date'],
		'stock_id'  =>  $_POST['hidden_stock'],
		'stock_qty' =>  $_POST['hidden_quantity']
 		);
		$_SESSION['cart'][$count]=$item_array;
   //}
//else{
	echo'<script>alert("Item is added!")</script>';
	echo'<script>window.location="item_detail.php"</script>';
	
//}   
	}
	else
	{
		$item_array = array(
		'item_id'  =>  $_POST['hidden_id'],
		'item_name'  =>  $_POST['nam'],
 		'item_price'  =>  $_POST['hiden_price'],
		'item_quantity'  =>  $_POST['val'],
		'sold_date'  =>  $_POST['hidden_date'],
		'stock_id'  =>  $_POST['hidden_stock'],
		'stock_qty' =>  $_POST['hidden_quantity']
		
 		);
		$_SESSION['cart'][0]=$item_array;
		
		echo'<script>alert("Item is added!")</script>';
	echo'<script>window.location="item_detail.php"</script>';
	
	}
}
        if(isset($_GET['action']) )
		{ 
	if($_GET['action'] == 'delete') 
                     {
	
		foreach($_SESSION['cart'] as $key => $value)
		      {
			if($value['item_id'] == $_REQUEST['id'])
			{
				unset($_SESSION['cart'][$key]);
				
				echo'<script>alert("Item Removed!")</script>';
				echo'<script>window.location="viewCart.php"</script>';
			}   
			
	          }
	}
	elseif($_GET['action'] == 'clear') 
                     {
					 unset($_SESSION['cart']);
				
				echo'<script>alert("All Item is clear ?!")</script>';
				echo'<script>window.location="viewCart.php"</script>';
			}
	elseif($_GET['action'] == 'updat') 
           {
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['item_id'];
			$quant2=$quant1['quantity'];
			$q=intval($_REQUEST['updat'.$pid]);
			if($q>0 && $q<=$quant2){
				$_SESSION['cart'][$i]['$quant2']=$q;
			}
				echo'<script>window.location="viewCart.php"</script>';
			}
		}}

?>

