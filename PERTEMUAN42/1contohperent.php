<?php

class ParentClass {
    public $nama;

    public function sapa() {
        echo "Halo, saya orang tua<br>";
    }
}

class ChildClass extends ParentClass {
    public function identitas() {
        echo "Saya anak dari: " . $this->nama . "<br>";
    }
}

$orangTua = new ParentClass();
$orangTua->nama = "ali";
$orangTua-> sapa();
echo "saya adalah: " . $orangTua->nama ."<br>";