<?php
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
 
// remove the item from the array
unset($_SESSION['cart_items'][$id]);
// redirect to product list and tell the user it was added to cart
header('Location: keranjang.php');
?>