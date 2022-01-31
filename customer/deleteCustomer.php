<?php
    include('../config.php');
    $id=$_GET["id"];
    $customers='customers/'.$id;
    $woocommerce->delete($customers, ['force' => true]);
?>
<meta http-equiv = "refresh" content = "0; url = /apiwp/customer/listCustomer.php" />