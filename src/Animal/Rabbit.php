<?php

namespace Animal;

use Animal\Interface\Furry;
use Animal\Interface\Herbivore;

class Rabbit extends Animal implements Herbivore, Furry
{
    public function brush(): void
    {
        echo sprintf('Brushing the %s %s', strtolower($this->getSpecies()), $this->name);
    }

    protected function getSpecies(): string
    {
        return 'Rabbit';
    }
}
