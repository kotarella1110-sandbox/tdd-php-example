<?php

namespace TDD\Part1\Chapter8;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}