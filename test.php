<?php
class Product {
    public $type;
    public $brand;
    public $stock;

    public function stockProduct() {
        return "Total stock this product... " .$this->stock. "<br>";
    }
    public function checkoutProduct() {
        $this->stock = $this->stock - 1;
        return "Stock product now available... ". $this->stock. "<br>";
    }

    public function wholeSaleProduct($total) {
        $this->stock = $this->stock - $total;
        return "Stock product now available... ". $this->stock. "<br>";
    }
    public function addStockProduct($total = 12) {
        $totalStock = $this->stock + $total;
        if ($totalStock <= 100) {
            $this->stock = $totalStock;
            return "Stock product now available... ". $this->stock. "<br>";
        }

        else {
            return "Stock can't be addStockProduct";
        }
    }
}

$product = new Product;
$product->type = "Cars";
$product->brand = "Marcedes";
$product->stock = 60;

//echo $product->wholeSaleProduct(10);
echo $product->addStockProduct(42);