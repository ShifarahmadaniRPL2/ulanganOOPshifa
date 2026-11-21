<?php
class buku{
    private $judul;
    private $penulis;
    private $stok;

    public function setjudul($judul) {
        $this-> judul = $judul;

    }
    public function getjudul(){
        return $this->judul;
    }

    public function setpenulis($penulis){
        $this->penulis=$penulis;
    }

    public function getpenulis(){
        return $this->penulis;
    }

    public function setstok($stok){
        if ($stok >=0){
            $this->stok=$stok;
        } else{
            echo "stok sudah habis!";
        }
    }

    public function getstok(){
        return $this->stok;
    }

    public function infobuku(){
        echo "judul: ".$this->getjudul().
        " |penulis: ".$this->getpenulis().
        " |stok: ".$this->getstok();
    }

}

//penggunaan
$buku1= new buku();
$buku1->setjudul("pemrograman web");
$buku1->setpenulis("Andi Wijaya");
$buku1->setstok("10");

$buku1->infobuku();
