<?php
class Buku {
    public $judul;
    public $penulis;

    public function info() {
        echo "Judul: $this->judul, Penulis: $this->penulis<br>";
    }
}
class BukuPelajaran extends Buku {
    public $mapel;

    public function info() {
        echo "Buku Pelajaran - $this->judul ($this->mapel)<br>";
    }
}

class BukuNovel extends Buku {
    public $genre;

    public function info() {
        echo "Novel - $this->judul [Genre: $this->genre]<br>";
    }
}
$bukupelajaran = new BukuPelajaran();
$bukupelajaran->judul = "Pemrograman PHP";
$bukupelajaran->mapel = "RPL";

$bukunovel = new BukuNovel();
$bukunovel->judul = "Laskar Pelangi";
$bukunovel->genre = "Drama";

$daftar = [$bukupelajaran, $bukunovel];

foreach ($daftar as $buku) {
    $buku->info();
}
