<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Myshop\Myproject\Classes\ProductPage;



$product = new ProductPage('WELCOME TO SHOP', 'THIS IS NOT IMAGE', 999999, '../photo/photo.png');


$product->display();