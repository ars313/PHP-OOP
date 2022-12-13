<?php
class Product {
    private $brand = "Logitech";
    private $price = 5000000;
    private $type = "Mouse";

    public function __get($name)
    {
        if ($name == "brand") {
            $hasil = strtoupper($this->brand);
        }
        else if ($name == "price") {
            $hasil = "Rp. ".number_format($this->price, 2, ",", ".");
        }
        else if ($name == "type") {
            $hasil = "Type Product : ". $this->type;
        }
        else {
            $hasil = "Sorry, property $name not found";
        }

        return $hasil;
    }
}


$product = new Product();
echo $product->brand;
echo "<br/>";
echo $product->price;
echo "<br/>";
echo $product->type;
echo "<br/>";
echo $product->car;