<?php
class Hewan {
    protected $jenis = "Mamalia";
}

class Kucing extends Hewan {
    public function tampilkanJenis() {
        return "Kucing adalah " . $this->jenis;
    }
}

$k = new Kucing();
echo $k->tampilkanJenis(); // ✅ Output: Kucing adalah Mamalia
// echo $k->jenis; ❌ Error
