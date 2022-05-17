<?php

require_once "Data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Venus";
$cat->run();

$dog = new Dog();
$dog->name = "Mars";
$dog->run();