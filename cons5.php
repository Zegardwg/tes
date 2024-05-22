<?php
class Lingkaran {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return M_PI * pow($this->jariJari, 2);
    }

    public function hitungKeliling() {
        return 2 * M_PI * $this->jariJari;
    }

    public function hitungVolume() {
        return (4 / 3) * M_PI * pow($this->jariJari, 3);
    }

    public function tampilkanInfo() {
        echo "Informasi Lingkaran: <br>";
        echo "Jari-Jari: {$this->jariJari}<br>";
        echo "Luas Lingkaran: {$this->hitungLuas()} (dihitung menggunakan metode " . __METHOD__ . ")<br>";
        echo "Keliling Lingkaran: {$this->hitungKeliling()} (dihitung menggunakan metode " . __METHOD__ . ")<br>";
        echo "Volume Bola dengan jari-jari yang sama: {$this->hitungVolume()} (dihitung menggunakan metode " . __METHOD__ . ")<br>";
    }
}

// Penggunaan
$lingkaran = new Lingkaran(7);
$lingkaran->tampilkanInfo();
?>
