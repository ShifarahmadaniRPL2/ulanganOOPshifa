<?php
use App\Models\User;
use App\Controllers\UserController;

require __DIR__ . '/vendor/autoload.php';

// Membuat objek User
$user = new User();

// Membuat objek UserController
$controller = new UserController();

// Menampilkan hasil
echo $user->getName() . "<br>";
echo $controller->index();
