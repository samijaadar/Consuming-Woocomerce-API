<?php
include('../config.php');
$data = json_encode($woocommerce->get('customers'));
$data = json_decode($data,true);
?>
<html>
  <head>
    <title>Ecommerce</title>
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('../header.php');?>
    <div class="container">
      <div style="width:900px;">
        <table id="table">
            <tr>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach($data as $row):
                    echo '<tr>';  
                      echo '<td>'.$row["username"].'</td>';
                      echo '<td>'.$row["first_name"].'</td>';
                      echo '<td>'.$row["last_name"].'</td>';
                      echo '<td>'.$row["email"].'</td>';
                      echo '<td><a href="customerEditForm.php?id='.$row["id"].'" ><i class="fa fa-edit"></i></a></td>';
                      echo '<td><a href="deleteCustomer.php?id='.$row["id"].'" 
                      onclick="if (!(confirm(\'Etes vous sur de vouloir supprimer ce client ?\'))) return false"><i class="fa fa-times"></i></a></td>';
                    echo '</tr>';
            endforeach;?>
        </table>  
      </div>
    </div>
  </body>
</html>