<?php
trait SmartElectronic {
    public function CheckOS()
    {
        return "Android 9.0 (Pie)";
    }
}

trait LowWat {
    public function efesiensi()
    {
        return "konsumsi daya 0.8";
    }
}

class SmartTV {
    use SmartElectronic, LowWat;
    public function CheckInfo()
    {
        return "Smart TV ". $this->CheckOS(). "-" . $this->efesiensi();
    }
}

$product = new SmartTV();
echo $product->CheckInfo();