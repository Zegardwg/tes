<?php

class Car {

    public $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }
}

$car = new Car();

echo "Merek mobil: ". $car->brand. "<br>";

echo "Merek mobil (dari motode): " . $car->getBrand() . "<br>";