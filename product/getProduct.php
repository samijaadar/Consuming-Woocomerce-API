<?php
include('../config.php');
$id=$_GET["id"];
$data = json_encode($woocommerce->get('products/'.$id));
$data = json_decode($data,true);
?>
<html>
  <head>
    <title>Ecommerce</title>
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('../header.php');
    echo '<div class="container">';
      echo '<div class="containerDetails">';
          foreach( $data['images'] as $img):
              echo '<img src="'.$img["src"].'">';
          endforeach;
          echo '<h1 class="link">'.$data["name"].'</h1>';
          echo '<h5>'.$data["description"].'</h5>';
          echo '<h6>'.$data["sale_price"].'$<span class="line-through">'.$data["regular_price"].'$</span></h6>';
          echo '<a href="productEditForm.php?id='.$data["id"].'" class="btn btn-1">Update</a>';
          echo '<a href="deleteProduct.php?id='.$data["id"].'" 
          onclick="if (!(confirm(\'Etes vous sur de vouloir supprimer ce produit ?\'))) return false" 
          class="btn btn-2">Delete</a>';
      echo '</div>';
    echo '</div>';
    ?>
  </body>
</html>