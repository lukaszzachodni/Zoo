<?php

namespace Animal\Interface;

use Food\Interface\Plant;

interface Herbivore extends AnimalInterface
{
    public function eat(Plant $food): void;

}
