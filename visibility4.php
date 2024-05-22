<?php

class Person{

    public $name;

    private $age;

    protected $address;

public function __construct($name, $age, $address) {

    $this->name = $name;

    $this-.age = $age;

    $this->address = $address;

}

public function greet(){
    echo "Hello, my name is " . $this->name;

}

private function getAge(){

    return $this->age;

}

protected function getAddress(){

    return $this->address;

}
class Student extend Person
{
    public function showinfo()
    {
        echo "Name:" . $this-.name;

        echo "<br>";

        echo "Adress:" . $this->getAddress() . "<br>";
    }
}

$person = new Person("John", 25, "Jakarta");

$person->name = "Doe";

$person->age = 30;

$person->address = "Bandung";

$student = new Student("Jane", 25, "Surabaya");

$studednt->showinfo();