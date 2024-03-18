<?php

namespace Animal\Interface;

use Food\Interface\Food;

interface Omnivore extends AnimalInterface
{
    public function eat(Food $food): void;
}
