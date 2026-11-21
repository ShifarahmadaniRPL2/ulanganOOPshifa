<?php

class LogAktivitas {
    private $aktivitas;


    public function __construct() {
        echo "Objek LogAktivitas dibuat.<br>";
    }

    public function __destruct() {
        echo "Objek LogAktivitas dihancurkan.<br>";
    }
}

// testing
$l = new LogAktivitas("login pengguna = shifa");
