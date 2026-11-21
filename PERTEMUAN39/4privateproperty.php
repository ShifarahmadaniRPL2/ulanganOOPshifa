<?php
class Bank {
    private $saldo = 500000;

    public function lihatSaldo() {
        return "Saldo Anda: Rp " . $this->saldo;
    }
}

$rekening = new Bank();
echo $rekening->lihatSaldo(); // ✅ Output: Saldo Anda: Rp 500000
// echo $rekening->saldo; ❌ Error (karena private)
