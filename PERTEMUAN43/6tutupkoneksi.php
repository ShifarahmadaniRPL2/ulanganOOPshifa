<?php

class KoneksiDB
{
    private $host;
    private $user;
    private $DB;

    public function __construct($host, $user, $DB)
    {
        $this->host = $host;
        $this->user = $user;
        $this->db   = $DB;
        echo "Koneksi database berhasil.<br>";
    }

    public function __destruct()
    {
        echo "Koneksi database ditutup.<br>";
    }
}

// testing
$db = new KoneksiDB("localhost", "root", "perpuastakaan");
