<?php

class Hewan {
    public function suara() {
        echo "Hewan bersuara<br>";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong...<br>";
    }
}

class ayam extends Hewan {
    public function suara() {
        echo "titut...<br>";
    }
}

// testing
$hewan1 = new Kucing();
$hewan2 = new ayam();

$hewan1->suara();
$hewan2->suara();
