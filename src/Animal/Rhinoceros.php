<?php

namespace Animal;

use Animal\Interface\Herbivore;

class Rhinoceros extends Animal implements Herbivore
{
    protected function getSpecies(): string
    {
        return 'Rhinoceros';
    }
}
