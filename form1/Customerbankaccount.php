   <?php
include 'db1.php';
?>
<?php
@$id = $_POST['id'];
@$bank_Name = $_POST['bank_Name'];
@$bank_Branch = $_POST['bank_Branch'];
@$BankCode = $_POST['BankCode'];
@$accountnumber = $_POST['accountnumber'];
@$account_password = $_POST['account_password'];
@$balance = $_POST['balance'];
@$first_name = $_POST['first_name'];
@$last_name = $_POST['last_name'];
@$customer_id = $_POST['customer_id'];
$result = mysql_query("select * from  bankaccount where id='$id'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="Customerbanckaccountform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO    bankaccount (id, bank_Name, bank_Branch, BankCode, accountnumber, account_password,balance, first_name, last_name,customer_id)
        VALUES ('$id', '$bank_Name', '$bank_Branch', '$BankCode', '$accountnumber', '$account_password','$balance', '$first_name', '$last_name', '$customer_id')");


echo '<script>windows: location="Customerbanckaccountform.php"</script>';
}
?>


 
