<?php
class Mahasiswa {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        echo "Data dibuat<br>";
    }

    public function __destruct() {
        echo "Data dihapus<br>";
    }
}

$m = new Mahasiswa("Andi");
