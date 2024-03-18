<?php

namespace Animal;

use Animal\Interface\Herbivore;

class Elephant extends Animal implements Herbivore
{
    protected function getSpecies(): string
    {
        return 'Elephant';
    }
}
