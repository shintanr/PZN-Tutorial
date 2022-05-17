<?php

class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void{
        echo "Hi $name, my name is Manager $this->name". PHP_EOL;
    }
}

class VicePresident extends Manager{

    public function __construct(string $name = ""){
        parent::__construct($name, "VP");
    }

    //tidak wajib tap direkomendasikan
    function sayHello(string $name): void{
        echo "Hi $name, my name is VP $this->name". PHP_EOL;
    }
}

// cara membuatnya adalah copas function yang ada di parent class, masukkan ke kelas child lalu ubah 