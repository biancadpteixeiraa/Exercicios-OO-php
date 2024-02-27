<?php
class Animal {
    public function emitirSom() {
        echo "Som de animal genérico\n";
    }
}

class Cachorro extends Animal {
    public function emitirSom() {
        echo "Au au </br>";
    }
}

class Gato extends Animal {
    public function emitirSom() {
        echo "Miau";
    }
}

function Polimorfismo(Animal $animal) {
    $animal->emitirSom();
}

$cachorro = new Cachorro();
$gato = new Gato();


Polimorfismo($cachorro);
Polimorfismo($gato);

