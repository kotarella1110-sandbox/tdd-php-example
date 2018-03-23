<?php

namespace TDD\Part1\Chapter9;

class Dollar extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}