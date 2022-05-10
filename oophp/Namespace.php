<?php


require_once "Data/Conflict.php";
require_once "Data/Helper.php";

// namespace digunakan untuk menyimpan class class di PHP
// bisa nested
// saat mengakses maka harus diawali dengan namespacenya terlebih dahulu

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

echo Helper\APPLICATION .PHP_EOL;
Helper\helpMe();