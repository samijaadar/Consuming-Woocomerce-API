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
    <h1 style="color:#2183a2">Ajouter Produit</h1>
        <form action="addProduct.php" method="post">
            <label>Titre</label>
            <input type="text" name="name" required>
            <label>Image URL</label>
            <input type="text" name="image" required>
            <label>Prix</label>
            <input type="number" name="price" required>
            <label>Prix Actuelle</label>
            <input type="number" name="sale_price" required>
            <label>Description</label>
            <textarea name="description" required cols="20" rows="6"></textarea>
            <button type="submit" class="btnAdd btn-1">Ajouter</button>
        </form>
    </div>
    </div>
  </body>
</html>