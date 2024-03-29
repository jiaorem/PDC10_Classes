<?php

include ("init.php");
use Models\Cart;

$carts = new Cart('', '','', '', '');
$carts->setConnection($connection);
$all_carts = $carts->getCartItems(1);
$prices[] = array();
foreach($all_carts as $carts){
    $product_price = $carts['total_price'];
    $p = array_push($prices,$product_price);
}
$cart_total = intval($prices[1]) + intval($prices[2]);

$template = $mustache->loadTemplate('cart.mustache');
echo $template->render(compact('all_carts','cart_total'));


