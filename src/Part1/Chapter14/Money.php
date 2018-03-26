<?php

namespace TDD\Part1\Chapter14;

class Money implements Expression
{
    protected $amount;
    protected $currency;
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }
    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }
    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }
    public function amount(): int
    {
        return $this->amount;
    }
    public function currency(): string
    {
        return $this->currency;
    }
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && $this->currency() === $money->currency();
    }
    public function __toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }
    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }
    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }
}