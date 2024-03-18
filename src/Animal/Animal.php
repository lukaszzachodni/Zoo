<?php

namespace Animal;

use Animal\Interface\AnimalInterface;
use Animal\Interface\Carnivore;
use Animal\Interface\Herbivore;
use Exception;
use Food\Interface\Food;
use Food\Interface\Meat;
use Food\Interface\Plant;
use InvalidArgumentException;

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        if (!$this instanceof AnimalInterface) {
            throw new Exception(sprintf('Class %s has to implements any of interfaces extended from %s', static::class, AnimalInterface::class));
        }
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->getSpecies(), $this->name);
    }

    abstract protected function getSpecies(): string;

    public function eat(Food $food): void
    {
        if ($this instanceof Carnivore && !$food instanceof Meat) {
            throw new InvalidArgumentException(sprintf('%s can only eat meat!', $this));
        } else if ($this instanceof Herbivore && !$food instanceof Plant) {
            throw new InvalidArgumentException(sprintf('%s can only eat plant!', $this));
        }
        echo sprintf('%s is not hungry anymore!', $this);
    }
}
