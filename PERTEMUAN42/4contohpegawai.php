<?php

class Pegawai {
    public $nama;

    public function tampilData() {
        echo "Nama: " . $this->nama . "<br>";
    }
}

class Dosen extends Pegawai {
    public $matkul;

    public function tampilData() {
        echo "Dosen: " . $this->nama . " - " . $this->matkul . "<br>";
    }
}

class Staff extends Pegawai {
    public $jabatan;

    public function tampilData() {
        echo "Staff: " . $this->nama . " - " . $this->jabatan . "<br>";
    }
}
$pegawai1 = new Dosen();
$pegawai1->nama = "shifa";
$pegawai1->matkul = "matematika";
$pegawai1-> tampildata();

$pegawai1 = new staff();
$pegawai1->nama = "aini";
$pegawai1->jabatan = "administrasi";
$pegawai1-> tampildata();
