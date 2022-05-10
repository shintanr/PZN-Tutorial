<?php

// menggunakan kata kunci extend

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Shinta";
$manager->sayHello("Nur");

$vp = new VicePresident();
$vp->name = "Rohmah";
$vp->sayHello("Nur");