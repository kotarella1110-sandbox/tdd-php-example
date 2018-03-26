<?php

namespace TDD\Part1\Chapter14;

class Bank
{
    private $rates;
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }
    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }
    public function rate(string $from, string $to): int
    {
        if ($from === $to) return 1;
        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}