<?php
class SmartPhone {
    public $brand;
    public $type;
    public $price;

    public function __construct($brand, $type, $price) {
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }
}


function viewSmartPhone(SmartPhone $hp){
    return "this brand smart phone : " . $hp->brand . "Type: " . $hp->type . "Price: ".number_format($hp->price
        ,2, ",",".");
}

$product = new SmartPhone("Apple", "Iphone Xtends", 14000000);
echo viewSmartPhone($product);