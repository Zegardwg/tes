<?php

class Duit {
    public $saldo = 0;

    public function tambah_saldo() {
        $saldo_ditambahkan = 10000;
        $hasil_saldo = $this->saldo + $saldo_ditambahkan;
        $this->saldo = $hasil_saldo;
        echo "Saldo anda bertambah = $hasil_saldo";
    }
}

class Duit_THR extends Duit {
    public $saldo = 100000;
    
    public function tambah_saldo() {
        $saldo_ditambahkan = 10000;
        $hasil_saldo = $this->saldo + $saldo_ditambahkan;
        $this->saldo = $hasil_saldo;
        echo "Saldo anda bertambah = $hasil_saldo";
    }
}

$duit = new Duit();
echo "Saldo sekarang : " . $duit->saldo . "<br>";
$duit->tambah_saldo();
echo "<br>";
echo "<br>";

$duit_thr = new Duit_THR();
echo "Saldo THR sekarang : " . $duit_thr->saldo . "<br>";
$duit_thr->tambah_saldo();
echo "<br>";
echo "<br>";
