<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahunpenerbit;

    public function infoBuku() {
        return "Judul: $this->judul Penulis: $this->penulis Tahun Penerbit: $this->tahunpenerbit";
    }
}
$buku1 = new Buku();
$buku1->judul = "Proggramer <br>";
$buku1->penulis = "Siti Hawa <br>";
$buku1->tahunpenerbit = "2001 <br>";
echo $buku1->infoBuku();

$buku2 = new Buku();
$buku2->judul = "Utusan Allah Swt <br>";
$buku2->penulis = "Siti Khadija <br>";
$buku2->tahunpenerbit = "2003 <br>";
echo $buku2->infoBuku();