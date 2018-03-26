<?php

namespace TDD\Part1\Chapter15;

interface Expression
{
    public function plus(Expression $addend): Expression;
    public function reduce(Bank $bank, string $to): Money;
}