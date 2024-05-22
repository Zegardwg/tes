<?php

// Abstract class Animal
abstract class Animal {
    protected $name;
    protected $umur;

    // Constructor
    public function __construct($name, $umur) {
        $this->name = $name;
        $this->umur = $umur;
    }

    // Abstract method for movement
    abstract public function move();

    // Abstract method for determining food
    abstract public function food();
}

// Class Mamalia
class Mamalia extends Animal {
    // Implementation of move method for Mamalia
    public function move() {
        echo $this->name . " bergerak dengan kakinya.\n";
    }

    // Implementation of food method for Mamalia
    public function food() {
        echo $this->name . " biasanya makan tumbuhan dan daging.\n<br>";
    }
}

// Class Burung
class Burung extends Animal {
    // Implementation of move method for Burung
    public function move() {
        echo $this->name . " terbang.\n";
    }

    // Implementation of food method for Burung
    public function food() {
        echo $this->name . " biasanya makan biji-bijian.\n<br>";
    }
}

// Class Reptil
class Reptil extends Animal {
    // Implementation of move method for Reptil
    public function move() {
        echo $this->name . " merayap.\n";
    }

    // Implementation of food method for Reptil
    public function food() {
        echo $this->name . " biasanya makan hewan kecil dan serangga.\n<br>";
    }
}

// Objek Mamalia
$mamalia = new Mamalia("Gajah", 10);
$mamalia->move(); // Output: Gajah bergerak dengan kakinya.
$mamalia->food(); // Output: Gajah biasanya makan tumbuhan dan daging.

// Objek Burung
$burung = new Burung("Elang", 5);
$burung->move(); // Output: Elang terbang.
$burung->food(); // Output: Elang biasanya makan biji-bijian dan serangga.

// Objek Reptil
$reptil = new Reptil("Ular", 3);
$reptil->move(); // Output: Ular merayap.
$reptil->food(); // Output: Ular biasanya makan hewan kecil dan serangga.
?>