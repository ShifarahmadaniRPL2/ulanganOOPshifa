<?php
// Class Buku
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function infoBuku() {
        return "Judul: $this->judul, Penulis: $this->penulis, Tahun: $this->tahunTerbit";
    }
}

// Class Peminjaman
class Peminjaman {
    public $namaPeminjam;
    public $tanggalPinjam;
    public $tanggalKembali;

    public function infoPeminjaman() {
        return "Peminjam: $this->namaPeminjam, Pinjam: $this->tanggalPinjam, Kembali: $this->tanggalKembali";
    }
}

// Membuat Object Buku
$buku1 = new Buku();
$buku1->judul = "Algoritma Pemrograman";
$buku1->penulis = "Andi Wijaya";
$buku1->tahunTerbit = 2022;

// Membuat Object Peminjaman
$peminjaman1 = new Peminjaman();
$peminjaman1->namaPeminjam = "Ahmad Fauzi";
$peminjaman1->tanggalPinjam = "2025-08-18";
$peminjaman1->tanggalKembali = "2025-08-25";

// Output
echo $buku1->infoBuku() . "<br>";
echo $peminjaman1->infoPeminjaman();
?>