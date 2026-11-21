<?php
//Aktivitas 3 
class Hewan {
    public function suara() {
        echo "Hewan bersuara";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong...<br>";
    }
}
$hewan1 = new Kucing();
$hewan1->suara();

//Aktivitas 4 – Jalankan Program
class Kendaraan {
    public function jalan() {
        echo "Kendaraan berjalan<br>";
    }
}

class Mobil extends Kendaraan {
    public function klakson() {
        echo "Tiiin...<br>";
    }
}

class Motor extends Kendaraan {
    public function klakson() {
        echo "Tin tin...<br>";
    }
}

$mobil = new Mobil();
$mobil->jalan();
$mobil->klakson();

$motor = new Motor();
$motor->jalan();
$motor->klakson();

