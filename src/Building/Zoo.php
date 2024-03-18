<?php

namespace Building;

use Animal\Animal;

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function showAnimals(): void
    {
        foreach ($this->animals as $animal) {
            echo $animal . PHP_EOL;
        }
    }
}