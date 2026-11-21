<?php
class AkunBank {
    public $namaPemilik;
    private $saldo;
    protected $noRekening;

    public function __construct($namaPemilik, $noRekening, $saldoAwal) {
        $this->namaPemilik = $namaPemilik;
        $this->noRekening = $noRekening;
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
    }

    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak cukup!<br>";
        }
    }

    public function cekSaldo() {
        return "Saldo: Rp " . number_format($this->saldo, 0, ',', '.');
    }

    protected function tampilkanRekening() {
        return "No Rekening: " . $this->noRekening;
    }
}

class AkunPremium extends AkunBank {
    public function bonusBunga() {
        $bonus = $this->getSaldo() * 0.1;
        $this->setSaldo($this->getSaldo() + $bonus);
    }

    // Setter & Getter untuk akses saldo (karena saldo private)
    private function setSaldo($saldoBaru) {
        $ref = new ReflectionClass($this);
        $prop = $ref->getParentClass()->getProperty('saldo');
        $prop->setAccessible(true);
        $prop->setValue($this, $saldoBaru);
    }

    private function getSaldo() {
        $ref = new ReflectionClass($this);
        $prop = $ref->getParentClass()->getProperty('saldo');
        $prop->setAccessible(true);
        return $prop->getValue($this);
    }

    public function infoAkun() {
        return $this->namaPemilik . " - " . $this->tampilkanRekening() . " - " . $this->cekSaldo();
    }
}

// Simulasi
$akun = new AkunPremium("Budi", "123456", 1000000);
$akun->setor(500000);
$akun->tarik(300000);
$akun->bonusBunga();
echo $akun->infoAkun();
?>
