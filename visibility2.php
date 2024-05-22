<?php
class Mneu {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    protected function getName() {
        return $this->name;
    }
}

class NasiPadang extends Menu() {
    public function displayMenu() {

        return "Menu Nasi Padang:" . $this->getName();
    }
}

$nasiPadang = new NasiPadang("Rendang");

//
// echo "Nama menu: " . $nasiPadang->name . "<br>";

//echo "Nama menu (dari motode): " . $nasiPadang->getName() . "<br>";

echo $nasiPadang->displayMenu(); . "<br>";