<?php 
class Siswa {
    public $nama = "Andi";

    public function tampilkanNama() {
        return $this->nama;
    }
}

$siswa1 = new Siswa();
echo $siswa1->nama; // Output: Andi
