<?php

// Abstract class artinya class tersebut tidak bisa dibuat sebagai object secara langsung hanya bisa diturunkan
// Gunakan kunci abstract sebelum kata kunci class
// Sehingga AC bisa digunakan sebagai kontrak child class kata


require_once "Data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location();

$city = new City();
$province = new Province();
$country = new Country();
