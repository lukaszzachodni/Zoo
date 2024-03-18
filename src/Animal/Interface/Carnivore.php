<?php

namespace Animal\Interface;

use Food\Interface\Meat;

interface Carnivore extends AnimalInterface
{
    public function eat(Meat $food): void;
}
