<?php
include('../config.php');
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$password=$_POST['password'];
$email=$_POST['email'];

$data = [
    'username'=>$username,
    'first_name' => $first_name,
    'last_name'=>$last_name,
    'password' => $password,
    'email'=>$email,
];

$woocommerce->post('customers', $data);
?>
<meta http-equiv = "refresh" content = "0; url = /apiwp/customer/listCustomer.php" />