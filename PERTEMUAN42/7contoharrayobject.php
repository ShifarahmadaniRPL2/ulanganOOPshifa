<?php

class Pegawai {
    public function kerja() {
        echo "Pegawai bekerja<br>";
    }
}

class Dosen extends Pegawai {
    public function kerja() {
        echo "Dosen mengajar<br>";
    }
}

class Staff extends Pegawai {
    public function kerja() {
        echo "Staff mengurus administrasi<br>";
    }
}

$list = [new Dosen(), new Staff()];

foreach ($list as $cetak) {
    $cetak->kerja();
}
