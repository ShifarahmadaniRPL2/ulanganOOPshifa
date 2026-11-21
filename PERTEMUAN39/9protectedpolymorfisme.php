<?php
class Produk {
    protected function kategori() {
        return "Umum";
    }
}

class Laptop extends Produk {
    public function tampilKategori() {
        return "Kategori Produk: " . $this->kategori();
    }
}

$l = new Laptop();
echo $l->tampilKategori(); // Output: Kategori Produk: Umum
