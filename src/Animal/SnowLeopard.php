<?php

namespace Animal;

use Animal\Interface\Carnivore;
use Animal\Interface\Furry;


class SnowLeopard extends Animal implements Carnivore, Furry
{
    public function brush(): void
    {
        echo sprintf('Brushing the %s %s', strtolower($this->getSpecies()), $this->name);
    }


    protected function getSpecies(): string
    {
        return 'Snow leopard';
    }
}
