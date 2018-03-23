<?php

namespace TDD\Part1\Chapter8;

abstract class Money
{
    protected $amount;
    abstract public function times(int $multiplier): Money;
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }
    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}