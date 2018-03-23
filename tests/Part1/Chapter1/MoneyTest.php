<?php

namespace TDD\Tests\Part1\Chapter1;

use PHPUnit\Framework\TestCase;
use TDD\Part1\Chapter1\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplecation()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}