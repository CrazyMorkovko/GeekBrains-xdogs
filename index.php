<?php
require('vendor/autoload.php');
require('app/productList.php');

use Jenssegers\Blade\Blade;
$blade = new Blade('views', 'cache');

$page = isset($_GET["page"]) ? $_GET["page"] : "main";

if ($page == "main") {
    echo $blade->make('main', ['page' => $page]);
}
else if ($page == "catalog") {
    echo $blade->make('catalog', ['page' => $page, 'products' => $products]);
}
else if ($page == "contacts") {
    echo $blade->make('contacts', ['page' => $page]);
}
else if ($page == "product") {
    $id = $_GET['id'];
    $product = [];
    foreach ($products as $good) {
        if ($good['id'] == $id) {
            $product = $good;
            break;
        }
    }
    echo $blade->make('openProduct', ['page' => $page, 'product' => $product]);
}