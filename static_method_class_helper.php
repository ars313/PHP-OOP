<?php
class ProductHelper {
    public static function cekValidSKU($sku) {
        $checkCondition = preg_match('/^[A-Z]{3}[0-9]{3}$/', $sku);
        if ($checkCondition == True) {
            return "SkU is valid $sku";
        } else {
            return "SKU is not valid $sku";
        }
    }
    public static function cekValidBrand($brand) {
        $allBrand = ["Samsung", "LG", "Sony", "Philips", "Sharp", "Sanken"];
        return in_array($brand, $allBrand);
    }
}

//if (ProductHelper::cekValidSKU("AAA545")) {
//    echo "SKU AAA545 valid <br/>";
//}
//
//if (ProductHelper::cekValidSKU("AaA545")) {
//    echo "SKU AaA545 valid <br/>";
//}
//
//if (ProductHelper::cekValidBrand("LG")) {
//    echo "Brand LG valid <br/>";
//}
//
//if (ProductHelper::cekValidBrand("StoreSim")) {
//    echo "Brand StoreSim valid <br/>";
//}

echo ProductHelper::cekValidSKU('AAA545');