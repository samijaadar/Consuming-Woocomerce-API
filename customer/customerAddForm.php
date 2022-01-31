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
    <h1 style="color:#2183a2">Ajouter Client</h1>
        <form action="addCustomer.php" method="post">
            <label>Username </label>
            <input type="text" name="username" required>
            <label>Email</label>
            <input type="text" name="email" required>
            <label>First Name</label>
            <input type="text" name="first_name" required>
            <label>Last Name</label>
            <input type="text" name="last_name" required>
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" class="btnAdd btn-1">Ajouter</button>
        </form>
    </div>
    </div>
  </body>
</html>