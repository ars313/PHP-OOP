<?php
abstract class Product {
    abstract public function cekBrand();
}

class Televisi extends Product {
    public function cekBrand()
    {
        return "Polytron";
    }
}

class WashingMachine extends Product {
    public function cekBrand()
    {
        return "Electrolux";
    }
}

class IceMachine extends Product {
    public function cekBrand()
    {
        return "Diamonds";
    }
}

$product01 = new Televisi();
$product02 = new WashingMachine();
$product03 = new IceMachine();

function showBrand($objectProduct) {
    return $objectProduct->cekBrand() . "<br>";
}

echo showBrand($product01);
echo showBrand($product02);
echo showBrand($product03);

?>