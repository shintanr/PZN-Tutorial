<?php

// khusus tipe data object, kita tidak perlu melakukan  type chect secara eksplisit
// Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan tipe data) dengan menggunakan kata kunci instanceof
// Hasil operator instanof adalah boolean, true jika tipe data sesuai, false jika tidak

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