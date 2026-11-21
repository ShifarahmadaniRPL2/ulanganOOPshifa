<?php

class Kendaraan {
    public function bergerak() {
        echo "Kendaraan bergerak<br>";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo "Mobil berjalan<br>";
    }
}

class Motor extends Kendaraan {
    public function bergerak() {
        echo "Motor melaju<br>";
    }
}

// polymorphism
$list = [new Mobil(), new Motor()];

foreach ($list as $k) {
    $k->bergerak();
}
//STUDI KASUS TAMBAHAN
class BangunDatar {
    public function luas() {}
}

class Persegi extends BangunDatar {
    public function luas() {
        echo 4 * 4 . "<br>";
    }
}

class Lingkaran extends BangunDatar {
    public function luas() {
        echo 3.14 * 5 * 5 . "<br>";
    }
}

$persegi = new Persegi();
echo "Luas Persegi: ";
$persegi->luas();

$lingkaran = new Lingkaran();
echo "Luas Lingkaran: ";
$lingkaran->luas();

?>
