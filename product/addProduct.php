<?php
include('../config.php');
$name=$_POST['name'];
$image=$_POST['image'];
$description=$_POST['description'];
$price=$_POST['price'];
$sale_price=$_POST['sale_price'];

$data = [
    'name' => $name,
    'sale_price'=>$sale_price,
    'regular_price'=>$price,
    'description' => $description,
    'images' => [
        [
            'src' => $image
        ]
    ],
];

$woocommerce->post('products', $data);
?>
<meta http-equiv = "refresh" content = "0; url = /apiwp" />