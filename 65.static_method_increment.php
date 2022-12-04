<?php
class Product {
    private static $totalProduct = 0 ;

    public function __construct() {
        self::$totalProduct++ ;
        echo "Total Product: " . self::$totalProduct . "<br />";
    }
}

$product = new Product();
$product01 = new Product();
$product02 = new Product();
$product03 = new Product();