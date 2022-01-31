<?php
include('../config.php');
$id=$_GET["id"];
$data = json_encode($woocommerce->get('customers/'.$id));
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
    <h1 style="color:#2183a2">Modifier Client</h1>
        <form action="updateCustomer.php" method="post">
            <?php echo '<input type="hidden" name="id" value="'.$data["id"].'">';
             echo ' <label>Username </label>';
             echo ' <input type="text" name="username" value="'.$data["username"].'" readonly>';
             echo ' <label>Email</label>';
             echo ' <input type="text" name="email" value="'.$data["email"].'" required>';
             echo ' <label>First Name</label>';
             echo ' <input type="text" name="first_name" value="'.$data["first_name"].'" required>';
             echo ' <label>Last Name</label>';
             echo ' <input type="text" name="last_name" value="'.$data["last_name"].'" required>';
           ?>
            <button type="submit" class="btnAdd btn-1">Modifier</button>
        </form>
    </div>
    </div>
  </body>
</html>