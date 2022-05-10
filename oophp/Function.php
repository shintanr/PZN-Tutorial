<?php

require_once "Data/Person.php";

$nur = new Person();
$nur->name = "Nur";
$nur->sayHello("Shinta");
$nur->info();

$rohmah = new Person();
$rohmah->name = "Rohmah";
$rohmah->sayHello("Nur");
$rohmah->info();

$shinta = new Person();
$shinta->name = "Shinta";
$shinta->sayHello(null);
$shinta->info();
