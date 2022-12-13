<?php
echo "kode ini berada di file ". __FILE__ ."<br><br>";
echo "File ini ada di folder ". __DIR__ . "<br><br>";
echo "Perintah ini berasal dari baris". __LINE__ . "<br><br>";
function belajar_magic_function() {
    return "Kode ini berada di dalam function ". __FUNCTION__ . "<br><br>";
}

echo belajar_magic_function();

