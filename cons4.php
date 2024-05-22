<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    // Deklarasi properti statis untuk total mahasiswa yang ada
    private static $totalMahasiswa = 0;

    // Deklarasi properti statis untuk menyimpan nama universitas
    private static $namaUniversitas;

    // Method statis untuk menetapkan nama universitas
    public static function setNamaUniversitas($nama) {
        self::$namaUniversitas = $nama;
    }

    // Method statis untuk mendapatkan informasi universitas
    public static function getInfoUniversitas() {
        return "Nama Universitas: ". self::$namaUniversitas. "<br>"
       . "Total Mahasiswa: ". self::$totalMahasiswa. "<br>";
    }

    // Constructor untuk menambah jumlah mahasiswa
    public function __construct() {
        self::$totalMahasiswa++;
    }
}

// Menetapkan nama universitas
Mahasiswa::setNamaUniversitas("Universitas Indonesia");

// Membuat objek mahasiswa dengan jumlah tertentu
$mahasiswa1 = new Mahasiswa();
$mahasiswa2 = new Mahasiswa();
$mahasiswa3 = new Mahasiswa();

// Menampilkan informasi universitas
echo Mahasiswa::getInfoUniversitas();
?>