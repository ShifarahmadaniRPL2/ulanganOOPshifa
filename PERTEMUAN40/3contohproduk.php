<?php
class Produk {
    private $nama;
    private $harga;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setHarga($harga) {
        if ($harga > 1000) {
            $this->harga = $harga;
        } else {
            echo "Harga harus lebih dari 1000";
        }
    }
    public function getHarga() {
        return $this->harga;
    }
}



// Penggunaan
$produk1 = new Produk();
$produk1->setNama("Laptop");
$produk1->setHarga(7500000);

echo "Produk: " . $produk1->getNama() . " | Harga: Rp " . $produk1->getHarga();

