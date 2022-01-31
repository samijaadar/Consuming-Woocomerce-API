<?php
include('config.php');
$data = json_encode($woocommerce->get('products'));
$data = json_decode($data,true);
?>
<html>
  <head>
    <title>Ecommerce</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('header.php');?>
    <div class="gallery">
    <?php foreach($data as $row):
        echo '<div class="content">';
            foreach( $row['images'] as $img):
                echo '<img src="'.$img["src"].'">';
            endforeach;
            echo '<a href="product/getProduct.php?id='.$row["id"].'" class="link">'.$row["name"].'</a>';
            echo '<h6>'.$row["sale_price"].'$<span class="line-through">'.$row["regular_price"].'$</span></h6>';
            echo '<a href="product/productEditForm.php?id='.$row["id"].'" class="btn btn-1">Update</a>';
            echo '<a href="product/deleteProduct.php?id='.$row["id"].'" 
            onclick="if (!(confirm(\'Etes vous sur de vouloir supprimer ce produit ?\'))) return false" 
            class="btn btn-2">Delete</a>';
        echo '</div>';
    endforeach;?>
    </div>
  </body>
</html>