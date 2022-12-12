<?php

interface ProductExport {
    public function CheckPriceUSD();
    public function CheckCountry();
}

class Televisi implements ProductExport {
    public function CheckPriceUSD() {
        return 185;
    }

    public function CheckCountry() {
        return ["Singapore", "Malaysia", "Thailand"];
    }
}

$product = new Televisi();
echo $product->CheckPriceUSD();
echo "<br/>";
echo implode(", ", $product->CheckCountry());