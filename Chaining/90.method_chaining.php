<?php
class Televisi {
    private $brand;
    private $typeScreen;
    private $sizeScreen;

    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setTypeScreen($typeScreen) {
        $this->typeScreen = $typeScreen;
        return $this;
    }

    public function setSizeScreen($sizeScreen) {
        $this->sizeScreen = $sizeScreen;
        return $this;
    }

    public function infoTelevision() {
        return "Televisi ". $this->brand . "With ". $this->typeScreen . "and". $this->sizeScreen . " inch";
    }
}

$product = new Televisi();
echo $product->setBrand("Samsung")
    ->setSizeScreen(42)
    ->setTypeScreen("LCD")
    ->infoTelevision();