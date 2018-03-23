<?php

namespace TDD\Part1\Chapter9;

class Franc extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}