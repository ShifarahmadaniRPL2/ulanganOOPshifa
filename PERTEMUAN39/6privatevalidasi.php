<?php
class Akun {
    private $password;

    public function setPassword($pass) {
        if(strlen($pass) >= 6) {
            $this->password = $pass;
            return "Password berhasil disimpan!";
        } else {
            return "Password minimal 6 karakter!";
        }
    }
}

$user = new Akun();
echo $user->setPassword("abc"); // Output: Password minimal 6 karakter!
echo $user->setPassword("abcdef"); // Output: Password berhasil disimpan!
