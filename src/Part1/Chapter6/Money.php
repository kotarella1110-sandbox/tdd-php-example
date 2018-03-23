<?php

namespace TDD\Part1\Chapter6;

class Money
{
    protected $amount;
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}