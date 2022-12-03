<?php

class Product {
    private static $totalProduct = 100;

    public static function cekProduct(){
        return "Total Product is ".self::$totalProduct;
    }

    public function returnProduct(){
        return $this->cekProduct();
    }
}

class Blender extends Product {
    public function cekBlender(){
        return self::cekProduct(). " include 3 type blender <br/>";
    }
}

class HairDryer extends Product {
    public function cekHairDryer(){
        return self::cekProduct(). " include 5 type hair dryer <br/>";
    }
}

$product01 = new Blender();
$product02 = new HairDryer();
$product03 = new Product();

echo $product01->cekBlender();
echo $product02->cekHairDryer();
echo $product03->returnProduct();