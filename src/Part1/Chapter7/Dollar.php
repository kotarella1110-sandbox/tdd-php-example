<?php

namespace TDD\Part1\Chapter7;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}