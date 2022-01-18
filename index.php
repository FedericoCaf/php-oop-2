<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";

$new_product = new Product("Apple MacBook Air", "Informatica");
$new_product->setDiscount(10);
$new_product->setPrice(987.82);

var_dump($new_product);

$new_user = new User("Ciccio89", "ciccio@libero.it");
var_dump($new_user);

$new_creditCard = new CreditCard("Francesco Rocchi", "123456789012345", "12/23");
var_dump($new_creditCard);


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


  
</body>
</html>