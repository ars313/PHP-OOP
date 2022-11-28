<?php

#prime number
class Product {
    public $type;
    public $brand;

    function productChoise() {
        return $this->type. "Brand produk adalah ...". $this->brand;
    }
}

$product1 = new Product();

$product1->type="Kulkas";
$product1->brand="LG";

echo $product1->productChoise();