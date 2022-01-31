<?php
    include('../config.php');
    $id=$_GET["id"];
    $product='products/'.$id;
    $woocommerce->delete($product, $parameters = []);
?>
<meta http-equiv = "refresh" content = "0; url = /apiwp" />