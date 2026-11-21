<?php

class Mobil {
    public $merk;
    public $warna;

    // method
    public function jalan() {
        return "Mobil sedang berjalan...";
    }
}

$mobil1 = new Mobil();
$mobil1->merk = "Honda";
$mobil1->warna = "Hitam";

echo "Mobil dengan merk:" . $mobil1->merk ."<br>";  // Output: Honda
echo "Warna:" . $mobil1->warna ."<br>"; // Output: Hitam
echo $mobil1->jalan() ."<br>"; // Output: Mobil sedang berjalan...