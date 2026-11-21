<?php
class Produk {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        echo "Produk $this->nama dibuat<br>";
    }
}

$p = new Produk("Laptop");
