<?php

namespace TDD\Part1\Chapter16;

class Sum implements Expression
{
    public $augend;
    public $addend;
    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }
    public function times(int $multiplier): Expression
    {
        return new Sum($this->augend->times($multiplier), $this->addend->times($multiplier));
    }
    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }
    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount() + $this->addend->reduce($bank, $to)->amount();
        return new Money($amount, $to);
    }
}