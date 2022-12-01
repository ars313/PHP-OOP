<?php
//
//class Product {
//    private $brand;
//    private $stock;
//
//    private function setStock($stock) {
//        if (is_int($stock)) {
//            $this->stock = $stock;
//        }
//        else {
//            echo "Stock must be a integer";
//        }
//    }
//
//    private function setBrand($brand) {
//        if (is_string($brand)) {
//            $this->brand = $brand;
//        }
//        else {
//            echo "Brand must be a string";
//        }
//    }
//
//    public function __construct($brand, $stock) {
//        $this->setBrand($brand);
//        $this->setStock($stock);
//    }
//
//    public function getStock() {
//        return $this->stock;
//    }
//
//    public function getBrand() {
//        return strtoupper($this->brand);
//    }
//}
//
//$product = new Product("Motorcycle", 15);
//
//echo $product->getBrand();
//echo "<br>";
//echo $product->getStock();
