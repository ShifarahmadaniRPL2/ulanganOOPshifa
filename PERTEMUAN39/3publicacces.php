<?php
class Mobil {
    public $merk = "Toyota";

    public function jalan() {
        return "Mobil $this->merk sedang berjalan...";
    }
}

$m = new Mobil();
echo $m->jalan(); // Output: Mobil Toyota sedang berjalan...
