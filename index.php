<?php

namespace Zoo;

use Animal\Elephant;
use Animal\Fox;
use Animal\Interface\Furry;
use Animal\Rabbit;
use Animal\Rhinoceros;
use Animal\SnowLeopard;
use Animal\Tiger;
use Building\Zoo;
use Food\Broccoli;
use Food\ChickenLeg;
use InvalidArgumentException;

include_once 'autoload.php';

$zoo = new Zoo();
$arr = [
    'elephant' => (new Elephant('Ezekiel')),
    'fox' => (new Fox('Fiodor')),
    'rabbit' => (new Rabbit('Ranger')),
    'rhinoceros' => (new Rhinoceros('Rio')),
    'snowLeopard' => (new SnowLeopard('Sandy')),
    'tiger' => (new Tiger('Timberland')),
];

foreach ($arr as $animal) {
    echo $animal . PHP_EOL;
    if ($animal instanceof Furry) {
        $animal->brush();
        echo PHP_EOL;
    }

    try {
        $animal->eat((new Broccoli()));
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
    echo PHP_EOL;

    try {
        $animal->eat((new ChickenLeg()));
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
    echo PHP_EOL;

    $zoo->addAnimal($animal);
    echo PHP_EOL;
}
$zoo->showAnimals();