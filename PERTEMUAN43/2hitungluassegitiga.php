<?php

class Segitiga {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

// testing
$segitiga1 = new Segitiga(10, 5);
echo "Luas Segitiga = " . $segitiga1->hitungLuas();
