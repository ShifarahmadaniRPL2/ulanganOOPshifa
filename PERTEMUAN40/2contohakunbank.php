<?php
class AkunBank {
    private $saldo;

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($jumlah) {
        if ($jumlah >= 0) {
            $this->saldo = $jumlah;
        } else {
            echo "Saldo tidak boleh negatif!";
        }
    }
}


// Penggunaan
$akun = new AkunBank();
$akun->setSaldo(500000);
echo "Saldo awal: Rp " . $akun->getSaldo();

