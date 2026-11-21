<?php
class Guru
{
    private $nama;
    private $mapel;
    private $gaji;
    public function setNama($n)
    {
        $this->nama = $n;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setMapel($m)
    {
        $this->mapel = $m;
    }
    public function getMapel()
    {
        return $this->mapel;
    }
    public function setGaji($g)
    {
        if ($g < 1500000) {
            $this->gaji = 1500000;
        } else {
            $this->gaji = $g;
        }
    }
    public function getGaji()
    {
        return $this->gaji;
    }
}

$guru = new Guru();
$guru->setNama("Pak Ahmad");
$guru->setMapel("Informatika");
$guru->setGaji(1200000);

echo "Nama Guru: " . $guru->getNama() . "<br>";
echo "Mapel: " . $guru->getMapel() . "<br>";
echo "Gaji: Rp" . number_format($guru->getGaji(), 0, ',', '.');
