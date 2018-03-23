<?php

namespace TDD\Part1\Chapter13;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}