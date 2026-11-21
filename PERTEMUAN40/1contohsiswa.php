<?php
class Siswa {
    private $nama;
    private $umur;

    // Getter & Setter
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function setUmur($umur) {
        if ($umur > 0) {
            $this->umur = $umur;
        } else {
            echo "Umur harus lebih dari 0";
        }
    }
}

// Penggunaan
$siswa1 = new Siswa();
$siswa1->setNama("Budi");
$siswa1->setUmur(17);

echo "Nama: " . $siswa1->getNama();
echo " | Umur: " . $siswa1->getUmur();
