<?php
class Car
{

    public $brand;

    protected $model;

    priavte $year;
}

public function __construct($brand, $model, $year)
{

    $this->brand = $brand;

    $this->model = $model;

    $this->year = $year;

}
public function getDetails()
{

    echo "Brand : " . $this->brand . "<br>";

    echo "Model : " . $this->model . "<br>";

    echo "Year : " . $this->year . "<br>";

}

class SportsCAr extends Car
{
    public funtion showDetails()
    {
        echo "Brand: " . $this->brand . "<br>";

        echo "Model: " . $this->model . "<br>";

    }
}

$car = new Car("Toyota", "Camry", "2021");

$car->brand = "Honda";

$car->model = "Accord";

$car->year = "2022";

$sportCar = new SportsCar("Ferrari", "488 GTB", "2020");

$sportsCar->showDetails();