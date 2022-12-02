<?php
//
//class Product {
//    private $sku;
//    private $stock;
//
//    private function setSku($sku) {
//        if(preg_match('/^[A-Z]{3}[0-9]{3}$/', $sku)) {
//            $this->sku = $sku;
//        }
//        else {
//            die("Invalid sku");
//        }
//    }
//
//    private function setStock($stock) {
//        if(is_int($stock)) {
//            $this->stock = $stock;
//        }
//        else {
//            die("Invalid stock");
//        }
//    }
//
//    public function __construct($sku, $stock) {
//        $this->setSku($sku);
//        $this->setStock($stock);
//    }
//
//    public function getSku() {
//        return $this->sku;
//    }
//
//
//    public function getStock()
//    {
//        return $this->stock;
//    }
//}
//
//$product = new Product('ABC123', 11);
//echo $product->getSku();