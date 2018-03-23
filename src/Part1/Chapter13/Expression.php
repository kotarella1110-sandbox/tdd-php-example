<?php

namespace TDD\Part1\Chapter13;

interface Expression
{
    public function reduce(string $to): Money;
}