<div class="topnav" id="myTopnav">
        <a href="/apiWP" class="active">Home</a>
        <a href="/apiWP/product/productAddForm.php">Ajouter produit</a>
        <a href="/apiWP/customer/listCustomer.php">Clients</a>
        <a href="/apiWP/customer/customerAddForm.php">Ajouter client</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
        
</div>

       
<style>
body {
  margin: 0;
  font-family: Nunito Sans;
}
.container{
  margin: 5% auto;
  width: 50%;
}

.topnav {
  overflow: hidden;
  background-color: #092730;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2183a2;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

