<?php

class KoneksiDB
{
    private $host;
    private $user;
    private $db;

    public function __construct($host, $user, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->db = $db;

        echo "Simulasi koneksi ke database '$db' berhasil.<br>";
    }
}

// testing
$db = new KoneksiDB("localhost", "root", "perpustakaan");
