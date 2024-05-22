<?php
    class Animal{

    public function sound(){
        echo "Bunyi hewan : tidak ada suara <br>";
    }
}

class Cat extends Animal {

    public function sound(){
        echo "Bunyi hewan : meow<br>";
    }
}

class dog extends Animal {

    public function sound(){
        echo "Bunyi hewan : Whoof<br>";
    }
}

$cat = new Cat();
echo "Suara kucing: ";
$cat->sound();

$dog = new dog();
echo "Suara Anjing: ";
$dog->sound();