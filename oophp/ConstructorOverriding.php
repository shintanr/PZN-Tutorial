<?php

// Constructor Overriding

// Karena constructor sama seperti function, maka constructor pun bisa kita deklarasikan ulang di class childnya 
// Sebenernya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun sangat tidak disarankan
// Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan warning 
// Namun berbeda dengan constructor overriding, kita boleh mengoverride dengan mengubah argumentsnya, namun untuk memanggil parent constructor 
class Manager {
    var string $name;

    var string $title;

    public function __construct(string $name, string $title){
        $this->name = $name;
        $this->name = $title;
    }
}