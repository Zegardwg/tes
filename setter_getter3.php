<?php

class Mahasiswa
{
    private $nama;

    private $nim;

    private $jurusan;

    private $kelas;

    private $no_hp;

    private $email;


public function setnama($newnama)
{
    $this->nama = $newnama;
}

public function getnama()
{
    return $this->nama;
}

    
public function setnim($newnim)
{
    $this->nim = $newnim;
}

public function getnim()
{
    return $this->nim;
}


public function setjurusan($newjurusan)
{
    $this->jurusan = $newjurusan;
}

public function getjurusan()
{
    return $this->jurusan;
}

public function setkelas($newkelas)
{
    $this->kelas = $newkelas;
}

public function getkelas()
{
    return $this->kelas;
}

public function setno_hp($newno_hp)
{
    $this->no_hp = $newno_hp;
}

public function getno_hp()
{
    return $this->no_hp;
}

public function setemail($newemail)
{
    $this->email = $newemail;
}

public function getemail()
{
    return $this->email;
}


}
$mahasiswa = new Mahasiswa();
$mahasiswa->setnama("John Doe");
$mahasiswa->setnim("123456789");
$mahasiswa->setjurusan("informatika");
$mahasiswa->setkelas("TI D");
$mahasiswa->setno_hp("08966756756786");
$mahasiswa->setemail("Eggar@gmail.com");

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setnama("rossi");
$mahasiswa1->setnim("");
$mahasiswa1->setjurusan("informatika");
$mahasiswa1->setkelas("TI D");
$mahasiswa1->setno_hp("08934242342341");
$mahasiswa1->setemail("Rossi@gmail.com");

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setnama("Heigel");
$mahasiswa2->setnim("V3923022");
$mahasiswa2->setjurusan("informatika");
$mahasiswa2->setkelas("TI D");
$mahasiswa2->setno_hp("089342423424");
$mahasiswa2->setemail("Heigel@gmail.com");

echo "Nama: " . $mahasiswa->getnama() . "<br>";
echo "NIM: " . $mahasiswa->getnim() . "<br>";
echo "Jurusan: " . $mahasiswa->getjurusan() . "<br>";
echo "kelas: " . $mahasiswa->getkelas() . "<br>";
echo "NO HP: " . $mahasiswa->getno_hp() . "<br>";
echo "Email: " . $mahasiswa->getemail() . "<br><br>";


echo "Nama: " . $mahasiswa1->getnama() . "<br>";
echo "NIM: " . $mahasiswa1->getnim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getjurusan() . "<br>";
echo "kelas: " . $mahasiswa1->getkelas() . "<br>";
echo "NO HP: " . $mahasiswa1->getno_hp() . "<br>";
echo "Email: " . $mahasiswa1->getemail() . "<br><br>";

echo "Nama: " . $mahasiswa2->getnama() . "<br>";
echo "NIM: " . $mahasiswa2->getnim() . "<br>";
echo "Jurusan: " . $mahasiswa2->getjurusan() . "<br>";
echo "kelas: " . $mahasiswa2->getkelas() . "<br>";
echo "NO HP: " . $mahasiswa2->getno_hp() . "<br>";
echo "Email: " . $mahasiswa2->getemail() . "<br>";
