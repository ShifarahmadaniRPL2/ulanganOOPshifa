<?php
class Buku {
    public $judul;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }
}

$buku1 = new Buku();
$buku1->setJudul("Belajar PHP");
echo $buku1->getJudul(); // Output: Belajar PHP
