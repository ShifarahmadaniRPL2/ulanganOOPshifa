<?php

class Buku {
    public $judul;
    public $penulis;
    public $penerbit;

    public function infoBuku() {
        return "Judul: $this->judul Penulis: $this->penulis Penerbit: $this->penerbit";
    }
}

$buku1 = new Buku();
$buku1->judul = "Basis Data <br>";
$buku1->penulis = "Siti Aminah <br>";
$buku1->penerbit = "Erlangga <br>";

$buku2 = new Buku();
$buku2->judul = "Pemograman web dengan php <br>";
$buku2->penulis = "Budi santoso <br>";
$buku2->penerbit = "RPL smkn 1 karang baru <br>";

echo $buku1->infoBuku();
// Output: Judul: Basis Data, Penulis: Siti Aminah, Penerbit: Erlangga
echo $buku2->infoBuku();
// Output: Judul: Pemograman web dengan php, Penulis: Budi santoso, Penerbit: RPL smkn 1 karang baru