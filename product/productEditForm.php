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
  <body style="background-color:#f8f7f7">
    <?php include('../header.php');?>
    <div class="container">
    <div class="containerDetails">
    <h1 style="color:#2183a2">Modifier Produit</h1>
        <form action="updateProduct.php" method="post">
            <?php echo '<input type="hidden" name="id" value="'.$data["id"].'">';
            echo '<label>Titre</label>';
             echo '<input type="text" name="name" value="'.$data["name"].'" required>';
            foreach( $data['images'] as $img):
              echo'<label>Image URL</label>';
              echo '<input type="text" name="image" value="'.$img["src"].'" required>';
            endforeach;
            echo '<label>Prix</label>';
            echo '<input type="number" name="price" value="'.$data["regular_price"].'" required>';
            echo '<label>Prix Actuelle</label>';
            echo '<input type="number" name="sale_price" value="'.$data["sale_price"].'" required>';
            echo '<label>Description</label>';
            echo '<textarea name="description" required cols="20" rows="6">'.$data["description"].'</textarea>'?>
            <button type="submit" class="btnAdd btn-1">Modifier</button>
        </form>
    </div>
    </div>
  </body>
</html>