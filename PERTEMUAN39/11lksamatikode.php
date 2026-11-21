<?php
class Mahasiswa {
    public $nama;
    private $nim;
    protected $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    private function tampilkanNIM() {
        return "NIM: " . $this->nim;
    }

    protected function tampilkanJurusan() {
        return "Jurusan: " . $this->jurusan;
    }

    public function tampilkanData() {
        return $this->nama . " - " . $this->tampilkanNIM() . " - " . $this->tampilkanJurusan();
    }
}

$mhs = new Mahasiswa("Ani", "12345", "RPL");
echo $mhs->nama . "<br>";
echo $mhs->tampilkanData();
?>
