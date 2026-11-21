<?php
class Pegawai {
    protected function hitungBonus($gaji) {
        return $gaji * 0.1;
    }
}

class Manager extends Pegawai {
    public function totalGaji($gaji) {
        return $gaji + $this->hitungBonus($gaji);
    }
}

$m = new Manager();
echo $m->totalGaji(5000000); // Output: 5500000
