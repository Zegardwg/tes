<?php
class DataMahasiswa {
    private static $totalmahasiswa = 0;
    private $namaID;
    private $NIM;
    private $prodi;

    public function __construct($namaID, $NIM, $prodi) {
        $this->namaID = $namaID;
        $this->NIM = $NIM;
        $this->prodi = $prodi;
        self::$totalmahasiswa += $prodi;
    }

    public static function gettotalmahasiswa() {
        return self::$totalmahasiswa;
    }

    public function getMahasiswaDetail() {
        return "Item: " . $this->namaID . ", NIM: $" . $this->NIM . ", prodi: " . $this->prodi;
    }

    public function setItemDetails($namaID, $NIM, $prodi) {
        $this->namaID = $namaID;
        $this->NIM = $NIM;
        $this->prodi = $prodi;
        self::$totalmahasiswa += ($prodi - $this->prodi);
    }
}

// Menambahkan beberapa item ke dalam keranjang belanja
$item1 = new DataMahasiswa("eggar", 3923022, 1);
$item2 = new DataMahasiswa("rossi", 3923021, 2);

// Mengubah detail item pertama
$item1->setItemDetails("Nomor Mahasiswa :", 3923022, 1);

// Menampilkan detail item dan total item di keranjang
echo "Detail Mahasiswa: " . $item1->getMahasiswaDetail() . "<br>";  
echo "Total Mahasiswa: " . DataMahasiswa::gettotalmahasiswa();  
?>