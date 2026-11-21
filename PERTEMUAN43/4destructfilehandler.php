<?php

class FileHandler {
    private $file;

    public function __construct($filename) {
        $this->file = fopen($filename, "w");
        echo "File $filename dibuka.<br>";
    }

    public function __destruct() {
        fclose($this->file);
        echo "File ditutup otomatis.<br>";
    }
}

// testing
$f = new FileHandler("data.txt");
