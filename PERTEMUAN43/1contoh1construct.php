<?php

class Mahasiswa {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        echo "Objek Mahasiswa dengan nama $this->nama dibuat.<br>";
    }
}

// testing
$m1 = new Mahasiswa("Andi");
$m2 = new Mahasiswa("Budi");
