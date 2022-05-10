<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict(); //Hanya bisa untuk 1 (use nya), kalau lebih dari 1 maka akan tetap pakau namespacenya

helpMe();

echo APPLICATION . PHP_EOL;
