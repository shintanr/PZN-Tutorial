<?php

// Polymorphism berasal dari bahasa Yunani berarti banyak bentuk
// Dalam OOP, polymorphism adalah kemampuan sebuah object berubah bentuk menjadi betuk lain
// Polymorphism erat hubungannya dengan inheritance

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Shinta");
var_dump($company);

$company->programmer = new BackendProgrammer("Nur");
var_dump($company);

$company->programmer = new FrontendProgrammer("Rohmah");
var_dump($company);

//company dengan tipe data programmer bisa mengakses class turunan yang ada di class programmer 

sayHelloProgrammer(new Programmer("Shinta"));
sayHelloProgrammer(new BackendProgrammer("Nur"));
sayHelloProgrammer(new FrontendProgrammer("Rohmah"));