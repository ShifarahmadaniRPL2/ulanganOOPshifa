<?php
class Hewan {
    public function bergerak() {
        echo "Hewan bisa bergerak<br>";
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
$hewan1 = new Kucing();
$hewan1->bergerak();
$hewan1->suara();
echo "hewan ini adalah: " . get_class($hewan1). "<br><br>";

$hewan1 = new Kucing();
$hewan1->bergerak();
$hewan1->suara();
echo "hewan ini adalah: " . get_class($hewan1). "<br><br>";