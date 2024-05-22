<?php
class kendaraan
{
    private $nama;

    private $warna;

    private $jenis;

    private $keterangan;


public function getnama()
{
    return $this->nama ;
}

public function getwarna()
{
    return $this->warna ;
}

public function getjenis()
{
    return $this->jenis ;
}

public function getketerangan()
{
    return $this->keterangan ;
}

    public function setnama($a)
    {
        $this->nama = $a;
    }

    public function setwarna($a)
    {
        $this->warna = $a;
    }

    public function setjenis($a)
    {
        $this->jenis = $a;
    }

    public function setketerangan($a)
    {
        $this->keterangan = $a;
    }

}
$kendaraan = new kendaraan;

$kendaraan->setnama("Mobil");
$kendaraan->setwarna("merah");
$kendaraan->setjenis("roda empat");
$kendaraan->setketerangan("Mobil perlu dilakukan pengecekan");

//menampilkan nama yang telah di set di atas
echo "Nama Kendaraan : <b>" . $kendaraan->getnama() . "</br> <br>";
echo "Warna Kendaraan : <b>" . $kendaraan->getwarna() . "</br> <br>";
echo "jenis Kendaraan : <b>" . $kendaraan->getjenis() . "</br> <br>";
echo "keterangan Kendaraan : <b>" . $kendaraan->getketerangan() . "</br> <br>";
