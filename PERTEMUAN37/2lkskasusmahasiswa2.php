<?php
class mahasiswa {
    public $nama;
    public $nim;
    public $prodi;

    public function tampilMahasiswa() {
        return "nama: $this->nama nim: $this->nim prodi: $this->prodi";
    }
    public function ubahProdi($prodiBaru) {
        $this->prodi = $prodiBaru;
        return "prodi berhasil di ubah menjadi: $this->prodi";
    }
}

$mahasiswa1 = new mahasiswa(); 
$mahasiswa1->nama = "zsaskia <br>";
$mahasiswa1->nim = "1122233 <br>";
$mahasiswa1->prodi = "teknik informatika <br>";

echo $mahasiswa1->tampilMahasiswa();
echo "<br>";
echo $mahasiswa1->ubahProdi("rekayasa perangkat lunak");