<?php
require_once('./vendor/autoload.php');

Marketcloud\Marketcloud::setCredentials(array(
  'secret_key' => 'SECRET_KEY', //add secret key
  'public_key' => 'ca5ce0ac-687e-4edc-abb8-b8726aec527f'
));

$products = Marketcloud\Products::get($_GET);
$products = $products->body->data;

$categories = Marketcloud\Categories::get(array());
$categories = $categories->body->data;

$brands = Marketcloud\Brands::get(array());
$brands = $brands->body->data;

session_start();

if (!isset($_SESSION["marketcloud_cart_id"]) OR empty($_SESSION["marketcloud_cart_id"])) {
	$cart_response = Marketcloud\Carts::create(array());
	$_SESSION["marketcloud_cart_id"] = $cart_response->body->data->id;

} else {
	$cart_response = Marketcloud\Carts::getById($_SESSION["marketcloud_cart_id"]);
	if ($cart_response->body->status == false){
		$cart_response = Marketcloud\Carts::create(array());
		$_SESSION["marketcloud_cart_id"] = $cart_response->body->data->id;
	}

}

$_SESSION["marketcloud_cart_items_number"] = count($cart_response->body->data->items);
$cart = $cart_response->body->data;

$categories = Marketcloud\Categories::get(array());
$categories = $categories->body->data;

?>