<?php

namespace TDD\Part1\Chapter1;

class Dollar
{
    public $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }
}