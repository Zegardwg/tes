<?php
class Myclass {
    const PI = 3.14;

    const APP_NAME = "MyApp";
}

public function printConstants() {
    echo "Nilai PI adalah: " . self::PI . "<br>";
    echo "Nama aplikasi: " . self::APP_NAME;
}

echo "Nilai PI adalah: " . MyClass::PI . "<br>";
echo "Nama aplikasi : " . self::APP_NAME;

$obj = new MyClass();
$obj->printConstants();