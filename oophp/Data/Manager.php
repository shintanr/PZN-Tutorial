<?php

class Manager {
    var string $name;

    function sayHello(string $name): void{
        echo "Hi $name, my name is Manager $this->name". PHP_EOL;
    }
}

class VicePresident extends Manager{
    function sayHello(string $name): void{
        echo "Hi $name, my name is VP $this->name". PHP_EOL;
    }
}

// cara membuatnya adalah copas function yang ada di parent class, masukkan ke kelas child lalu ubah 