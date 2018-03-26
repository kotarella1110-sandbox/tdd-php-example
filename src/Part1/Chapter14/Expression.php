<?php

namespace TDD\Part1\Chapter14;

interface Expression
{
    public function reduce(Bank $bank, string $to): Money;
}