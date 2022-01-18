<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Laptop.php";

$new_product = new Product("Apple MacBook Air", "Informatica", 8, 13, 256);
$new_product->setDiscount(10);
$new_product->setPrice(987.82);
// var_dump($new_product);

$new_laptop = new Laptop("Apple MacBook Air", "Informatica", 8, 13, 256);
$new_laptop->setDiscount(10);
$new_laptop->setPrice(987.82);
// var_dump($new_laptop);

$new_user = new User("Ciccio89", "ciccio@libero.it");
// var_dump($new_user);

$new_creditCard = new CreditCard("Francesco Rocchi", "1234567890123456", "12/23");
// var_dump($new_creditCard);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
</head>
<body>

<h2> <?php echo $new_laptop->getName() ?> </h2>
<h6> Categoria: <?php echo $new_laptop->getCategory() ?> </h6>
<h4> Prezzo:  <?php echo $new_laptop->getPrice() ?> € </h4>
<h5> Sconto: <?php echo $new_laptop->getDiscount() ?> %</h5>
<h3> Ram: <?php echo $new_laptop->getRam() ?> GB </h3>
<h3> Screen: <?php echo $new_laptop->getScreenSize() ?> Pollici </h3>
<h3> HD: <?php echo $new_laptop->getHardDisk() ?> GB </h3>

  
</body>
</html>