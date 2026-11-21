<?php
class Hewan {
    public function suara() {
        echo "Hewan bersuara<br>";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong<br>";
    }
}
$kucing = new Kucing();
$kucing->suara();

//studikasus2
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
        echo "Staff bekerja di kantor<br>";
    }
}

$list = [new Dosen(), new Pegawai()];
$list = [new Dosen(), new Staff()];

foreach ($list as $p) {
    $p->kerja();
}

//Studi Kasus 3 – Perpustakaan (Gabungan)
class Buku {
    public function info() {
        echo "Info buku<br>";
    }
}

class BukuNovel extends Buku {
    public function info() {
        echo "Novel<br>";
    }
}
class BukuPelajaran extends Buku {
    public function info() {
        echo "Buku Pelajaran<br>";
    }
}
$buku1 = new BukuPelajaran();
$buku1->info();

$buku2 = new BukuNovel();
$buku2->info();

//miniChallenge

class BangunDatar {
    public function hitungLuas() {
    }
}

class Persegi extends BangunDatar {
    public function hitungLuas() {
        echo 4 * 4;
    }
}

class Lingkaran extends BangunDatar {
    public function hitungLuas() {
        echo 3.14 * 5 * 5 / 1;
    }
}

$persegi = new Persegi();
echo "Luas Persegi: ";
$persegi->hitungLuas();

echo "<br>";

$lingkaran = new Lingkaran();
echo "Luas Lingkaran: ";
$lingkaran->hitungLuas();

?>
