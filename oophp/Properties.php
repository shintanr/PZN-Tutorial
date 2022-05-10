<?php

require_once "Data/Person.php";

$person = new Person();
$person->name = "Shinta";
$person->address = "Banyumas";
$person->country = "Indonesia";

echo "Name : $person->nama " . PHP_EOL;
echo "Addres : $person->address " . PHP_EOL;
echo "Country : $person->country " . PHP_EOL;

var_dump($person);

$person2 = new Person();
$person2->nama = "Nur";
echo "Name : $person2->nama " . PHP_EOL;

