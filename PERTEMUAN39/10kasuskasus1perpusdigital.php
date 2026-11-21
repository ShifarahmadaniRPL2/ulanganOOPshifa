<?php
class Buku {
    public $judul;
    private $harga;

    public function __construct($judul, $harga) {
        $this->judul = $judul;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga;
    }

    protected function diskonHarga() {
        return $this->harga * 0.8;
    }
}
class BukuDiskon extends Buku {
    public function getHargaDiskon() {
        return $this->diskonHarga();
    }
}
// Uji Coba
$buku1 = new BukuDiskon("Belajar PHP OOP", 100000);
echo "Judul: " . $buku1->judul . "<br>"; 
echo "Harga Asli: Rp " . $buku1->getHarga() . "<br>";
echo "Harga Diskon: Rp " . $buku1->getHargaDiskon();
