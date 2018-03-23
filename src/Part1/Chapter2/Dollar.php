<?php

namespace TDD\Part1\Chapter2;

class Dollar
{
    public $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}