
<?php
include('../config.php');
$id=$_POST['id'];
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

$data = [
    'username'=>$username,
    'first_name' => $first_name,
    'last_name'=>$last_name,
    'email'=>$email,
];

$woocommerce->put('customers/'.$id, $data);
?>
<meta http-equiv = "refresh" content = "0; url = /apiwp/customer/listCustomer.php" />