<?php

namespace TDD\Part1\Chapter12;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return Money::dollar(10);
    }
}