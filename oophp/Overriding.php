<?php

require_once "Data/Manager.php";
// Function Overriding

// function Overriding adalah kemampuan mendeklarasikan ulang function di child class yang sudah ada di parent class 
// Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi
// istilahnya menimpa fungsi yang ada diparent class

$manager = new Manager();
$manager->name = "Shinta";
$manager->sayHello("Nur");

$vp = new VicePresident();
$vp->name = "Rohmah";
$vp->sayHello("Nur");