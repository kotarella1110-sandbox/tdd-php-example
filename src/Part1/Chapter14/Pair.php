<?php

namespace TDD\Part1\Chapter14;

class Pair
{
    private $from;
    private $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
    public function equals(Pair $pair): bool
    {
        return $this->from === $pair->from && $this->to === $pair->to;
    }
    public function hashCode(): int
    {
        return 0;
    }
}