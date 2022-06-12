<?php

session_start();

//if(time() - $_SESSION['timeLogin'] > 1800) {
//    $_SESSION['timeLogin'] = time(); // add this line
//    header('Location: index.php');
//}

//require('Template/user/_logout.php');

// require MySQL Connection
require('database/DBController.php');

// require Product Class
require('database/Product.php');

// require Cart Class
require('database/Cart.php');

// require User Class
require('database/User.php');

// DB Controller Object
$db = new DBController();

// Product Object
$product = new Product($db);
$product_shuffle = $product->getData();
// print_r($product->getData());

// Cart Object
$cart = new Cart($db);
// die(print_r($cart->getCartId( $product->getData('cart'))));

$user = new User($db);


