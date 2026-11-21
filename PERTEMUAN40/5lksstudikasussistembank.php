<?php
class RekeningBank {
    private $nomorRekening;
    private $namaPemilik;
    private $saldo;

    // Setter & Getter Nomor Rekening
    public function setNomorRekening($no) {
        $this->nomorRekening = $no;
    }
    public function getNomorRekening() {
        return $this->nomorRekening;
    }

    // Setter & Getter Nama Pemilik
    public function setNamaPemilik($nama) {
        $this->namaPemilik = $nama;
    }
    public function getNamaPemilik() {
        return $this->namaPemilik;
    }

    // Setter & Getter Saldo
    public function setSaldo($saldo) {
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        } else {
            echo "Saldo tidak boleh negatif!<br>";
        }
    }
    public function getSaldo() {
        return $this->saldo;
    }
}

// Uji coba
$rekening = new RekeningBank();
$rekening->setNomorRekening("12345");
$rekening->setNamaPemilik("Andi Saputra");
$rekening->setSaldo(500000);

// Tampilkan data awal
echo "Nomor Rekening: " . $rekening->getNomorRekening() . "<br>";
echo "Nama Pemilik: " . $rekening->getNamaPemilik() . "<br>";
echo "Saldo Awal: Rp" . $rekening->getSaldo() . "<br>";

// Update saldo
$rekening->setSaldo(700000);
echo "Saldo Setelah Update: Rp" . $rekening->getSaldo();
?>
