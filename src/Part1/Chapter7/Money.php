<?php

namespace TDD\Part1\Chapter7;

class Money
{
    protected $amount;
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }
}