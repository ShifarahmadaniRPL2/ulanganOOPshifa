<?php
class Mahasiswa {
    private $nama;
    private $nim;

    public function setNama($n) {
        $this->nama = $n;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNim($n) {
        $this->nim = $n;
    }

    public function getNim() {
        return $this->nim;
    }
}

$mhs = new Mahasiswa();
$mhs->setNama("Budi");
$mhs->setNim("20250123");

echo "Nama: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNim();
