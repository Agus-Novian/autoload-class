<?php

use Agusn\AutoloadClass\TestClass\Product;
use Agusn\AutoloadClass\TestClass\User;

require_once __DIR__ . '/src/init.php';

$product = new Product();
$product->getProduct();

$user = new User();
$user->getUser();
