<?php

class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;

        echo "Buku '$this->judul' berhasil ditambahkan.<br>";
    }

    public function tampilkanInfo() {
        echo "Judul: $this->judul, Penulis: $this->penulis, Tahun: $this->tahun <br>";
    }

    public function __destruct() {
        echo "Buku '$this->judul' dihapus dari sistem.<br>";
    }
}

// testing
$b1 = new Buku("Pemrograman PHP", "Andi", 2020);
$b1->tampilkanInfo();
