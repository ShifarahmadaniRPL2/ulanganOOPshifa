<?php

class Kendaraan {
    public function jalan() {
        echo "Kendaraan berjalan dengan roda<br>";
    }
}

class Mobil extends Kendaraan {
    public function roda() {
        echo "memiliki roda 4...<br>";
    }
}

class Motor extends Kendaraan {
    public function roda() {
        echo "memiliki roda 2...<br>";
    }
}
$Kendaraan1 = new mobil();
$Kendaraan1->jalan();
$Kendaraan1->roda();
echo "kendaraan ini adalah: " . get_class($Kendaraan1) . "<br><br>";

$Kendaraan1 = new motor();
$Kendaraan1->jalan();
$Kendaraan1->roda();
echo "kendaraan ini adalah: " . get_class($Kendaraan1) . "<br><br>";

