<?php

namespace Animal;

use Animal\Interface\Furry;
use Animal\Interface\Omnivore;

class Fox extends Animal implements Omnivore, Furry
{
    public function brush(): void
    {
        echo sprintf('Brushing the %s %s', strtolower($this->getSpecies()), $this->name);
    }

    protected function getSpecies(): string
    {
        return 'Fox';
    }
}
