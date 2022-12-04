<?php
class Product {
    public $priceUSD = 0;
    private const KURSUSD = 15000;

    public function priceIDR() {
        return $this->priceUSD * self::KURSUSD;
    }
}

$convertIDR = new Product;
$convertIDR->priceUSD = 15;
echo $convertIDR->priceIDR();