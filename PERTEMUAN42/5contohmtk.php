<?php

class Matematika {

    public function tambah(...$angka) {
        return array_sum($angka);
    }
}

// testing
$m = new Matematika();

echo $m->tambah(3, 4) . "<br>";        // 7
echo $m->tambah(2.5, 3.5) . "<br>";    // 6
echo $m->tambah(1, 2, 3) . "<br>";     // 6
