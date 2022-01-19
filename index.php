<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Laptop.php";
require_once __DIR__ . "/classes/Customer.php";

$new_product = new Product("Apple MacBook Air", "Informatica", 8, 13, 256);
$new_product->setDiscount(10);
$new_product->setPrice(987.82);
// var_dump($new_product);

$new_customer = new Customer("fracchia77", "fracchia@gmail.com");
$new_customer->setCreditCard('Fabio Pecchia', 123456456456, 02, 23);
// var_dump($new_customer);

$new_laptop = new Laptop("Apple MacBook Air", "Informatica", 8, 13, 256);
$new_laptop->setDiscount(10);
$new_laptop->setPrice(987.82);
$new_laptop->setCpu('Intel core i7');
$new_laptop->setGraphic('Invidia');
$new_laptop->setResolution('1920x1080');
$new_laptop->setOs('Windows 10 Pro');
// var_dump($new_laptop);

$new_user = new User("Ciccio89", "ciccio@libero.it");
// var_dump($new_user);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>

  <style>
   body{
     font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     background-color:lightgray;
   }    

  </style>
</head>
<body>

<h1>DATI DEL PRODOTTO</h1>

<h2> <?php echo $new_laptop->getName() ?> </h2>
<h6> <small>Categoria:</small>  <?php echo $new_laptop->getCategory() ?> </h6>
<h3>  <small>Prezzo:</small>  <?php echo $new_laptop->getPrice() ?> € </h3>
<h5> <small>Sconto:</small>  <?php echo $new_laptop->getDiscount() ?> %</h5>
<h4> <small>Ram:</small>  <?php echo $new_laptop->getRam() ?> GB </h4>
<h4> <small>Screen:</small>  <?php echo $new_laptop->getScreenSize() ?> Pollici </h4>
<h4> <small>Hard disk:</small>  <?php echo $new_laptop->getHardDisk() ?> GB </h4>
<h4> <small>Cpu:</small>  <?php echo $new_laptop->getCpu() ?> </h4>
<h4> <small>Graphic:</small>  <?php echo $new_laptop->getGraphic() ?> </h4>
<h4> <small>Resolution</small>  <?php echo $new_laptop->getResolution() ?> </h4>
<h4> <small>Operating system</small>  <?php echo $new_laptop->getOs() ?> </h4>

<h1>DATI DEL CLIENTE</h1>

<h2> <small> username:</small> <?php echo $new_customer->getNickname() ?> </h2>
<h3> <small> email:</small> <?php echo $new_customer->getEmail() ?> </h3>

  
</body>
</html>