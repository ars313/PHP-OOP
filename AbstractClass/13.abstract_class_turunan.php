<?php
abstract class Product {
    abstract public function checkPrice();
}

abstract class Televisi extends Product {
    abstract public function checkType();
}

class TelevisiLED extends Televisi {
    public function checkPrice() {
        return 3000000;
    }

    public function checkType() {
        return 'LED';
    }
}

$product01 = new TelevisiLED();
echo $product01->checkPrice();
echo "<br>";
echo $product01->checkType();
echo "<br>";