<?php
class Komputer {
    private function rahasia() {
        return "Password: 12345";
    }

    public function tampilkan() {
        return $this->rahasia();
    }
}

$pc = new Komputer();
echo $pc->tampilkan(); // ✅ Output: Password: 12345
// echo $pc->rahasia(); ❌ Error
