<?php
class Pakaian {

    private $jenis;
    public function __construct($jenis){
        $this->jenis = $jenis;
    }

    public function getJenis(){
        return $this->jenis;
    }

}
class PakaianAnak extends Pakaian {
    public function setJenis($value) {
        // Mengakes properti privat dari subkelas tidak di perbolehkan
        // $this-.jenis = $value;
    }
}

$pakaianAnak = new PakaianAnak("Baju Anak");

$pakaianAnak->setJenis("Baju Anak Laki Laki");

echo "Jenis Pakaian: " . $pakaianAnak->getJenis() . "<br>";