<?php

class penjualan {
    public $namabarang;
    public $harga;
    public $jumlah;

    public function hitungtotal() {
        return $this->harga * $this->jumlah;   
    }
    public function tampilnota() {
        return "struk penjualan:" . $this->namabarang ."harga: " . $this->harga .
        " jumlah: " . $this->jumlah . "- total: " . $this->hitungtotal();

    }
}

$penjualan1 = new penjualan();
$penjualan1->namabarang = "buku tulis";
$penjualan1->harga = 5000;
$penjualan1->jumlah = 3;
$penjualan1->hitungtotal();
$penjualan1->tampilnota();


$penjualan2 = new penjualan();
$penjualan2->namabarang = "pensil";
$penjualan2->harga = 2000;
$penjualan2->jumlah = 5;
$penjualan2->hitungtotal();
$penjualan2->tampilnota();

echo "nama harga: " . $penjualan1->namabarang . "<br>";
echo "harga: " . $penjualan1->harga . "<br>";
echo "jumlah: " . $penjualan1->jumlah . "<br>";
echo "total: " . $penjualan1->hitungtotal() . "<br>";
echo "total" . $penjualan1->tampilnota() . "<br><br>";


echo "nama harga: " . $penjualan2->namabarang . "<br>";
echo "harga: " . $penjualan2->harga . "<br>";
echo "jumlah: " . $penjualan2->jumlah . "<br>";
echo "total: " . $penjualan2->hitungtotal() . "<br>";
echo "total" . $penjualan2->tampilnota() . "<br><br>";